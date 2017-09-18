<?php
namespace Test\Zoo\Modules\Zoo;

use PHPUnit\Framework\TestCase;

use Zoo\DependencyContainer;
use Zoo\DependencyContainerInterface;

/**
 * Class ZooTest
 * @package Test\Zoo\Modules\Zoo
 */
class ZooTest extends TestCase {

    /**
     * Dependency container
     *
     * @var DependencyContainerInterface
     */
    private $di;

    /**
     * Animals instances
     *
     * @return array
     */
    public function animalsInstancesDataProvider() {

        return [
            [
                new \Zoo\Modules\Zoo\Animals\Bird(), ['birth', 'eat', 'purify', 'fly', 'walk']
            ],
            [
                new \Zoo\Modules\Zoo\Animals\Dolphin(), ['birth', 'eat', 'purify', 'giveMilk', 'swim']
            ],
            [
                new \Zoo\Modules\Zoo\Animals\Fish(), ['birth', 'eat', 'purify', 'swim']
            ],
            [
                new \Zoo\Modules\Zoo\Animals\Penguin(), ['birth', 'eat', 'purify', 'swim','walk']
            ],

            [
                new \Zoo\Modules\Zoo\Animals\Monkey(), ['birth', 'eat', 'purify','walk', 'giveMilk']
            ],
        ];
    }

    /**
     * Animals instances
     *
     * @return array
     */
    public function animalsBehaviorMapDataProvider() {

        return [
            [
                new \Zoo\Modules\Zoo\Animals\Bird(), [
                    'birth' => true,
                    'eat' => true,
                    'purify' => true,
                    'fly' => true,
                    'walk' => true,
                    'giveMilk' => false,
                    'swim' => false
                ]
            ],
            [
                new \Zoo\Modules\Zoo\Animals\Dolphin(), [
                    'birth' => true,
                    'eat' => true,
                    'purify' => true,
                    'giveMilk' => true,
                    'swim' => true,
                    'fly' => false,
                    'walk' => false
                ]
            ],
            [
                new \Zoo\Modules\Zoo\Animals\Fish(), [
                    'birth' => true,
                    'eat' => true,
                    'giveMilk' => false,
                    'purify' => true,
                    'swim' => true,
                    'fly' => false,
                    'walk' => false
                ]
            ],
            [
                new \Zoo\Modules\Zoo\Animals\Penguin(), [
                    'birth' => true,
                    'eat' => true,
                    'purify' => true,
                    'swim' => true,
                    'walk' => true,
                    'fly' => false,
                    'giveMilk' => false,
                ]
            ],
            [
                new \Zoo\Modules\Zoo\Animals\Monkey(), [
                    'birth' => true,
                    'eat' => true,
                    'purify' => true,
                    'swim' => false,
                    'walk' => true,
                    'fly' => false,
                    'giveMilk' => true,
                ]
            ],
        ];
    }

    /**
     * Init
     */
    public function setUp() {

        $this->di = new DependencyContainer(
            new \Zoo\Registry()
        );
        $this->di->register('ZooTest', new \Zoo\Modules\Zoo\Zoo());
    }

    /**
     * Kill testing object
     */
    public function tearDown() {
        $this->di = null;
    }

    /**
     * Test Zoo container instance
     */
    public function testZooFactoryInstance() {
        $this->assertInstanceOf('Zoo\Modules\Zoo\ZooFactory', $this->di->get('ZooTest'));
    }

    /**
     * @param $actualObject
     * @param $expectedMethods
     *
     * @dataProvider animalsBehaviorMapDataProvider
     */
    public function testZooAnimalsBehaviorsTruePositive($actualObject, $expectedMethods) {

        $function = new \ReflectionClass($actualObject);
        /** @var \Zoo\Modules\Zoo\ZooFactory $zoo */
        $zoo = $this->di->get('ZooTest');
        $animal = $zoo->conceiveAnimal($function->getShortName());
        $this->assertInstanceOf(\Zoo\Modules\Zoo\Animals\Aware\AbstractAnimalObject::class, $animal);
        $this->assertInstanceOf(\Zoo\Modules\Zoo\Animals\Aware\AnimalInterface::class, $animal);

        foreach ($expectedMethods as $method => $exist) {
            $this->assertEquals(method_exists($animal,$method), $exist);

        }
    }

    /**
     * @param $actualObject
     * @param $expectedMethods
     *
     * @dataProvider animalsInstancesDataProvider
     */
    public function testZooAnimalsBehaviorsInSetTruePositive($actualObject, $expectedMethods) {

        $classMethods = get_class_methods($actualObject);
        $reflectionClass = new \ReflectionClass($actualObject);

        foreach ($classMethods as $classMethod) {
            if(false === strpos($classMethod, '__')){
                $this->assertContains($classMethod, $expectedMethods);
                $method = $reflectionClass->getMethod($classMethod);

                /**
                 * Check return types. (Can be present for all Value Objects)
                 * @since PHP7.0 getReturnType()
                 */
                $this->assertNotNull($method->getReturnType());
                $reflectionMethod = new \ReflectionMethod($actualObject, $classMethod);
                $expectedResponse = $reflectionMethod->invoke($actualObject);
                $this->assertInternalType('string', gettype($expectedResponse));
            }
        }
    }
}