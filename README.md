# Amadeus It Group PHP Developer Technical Task
-----------------------------------------------

### Development
1. [START] Install & configure docker container @estimated 3h (since i'm working with Docker for the first time)
2. [ADD] Configured and installed unittests environment for Docker @estimated 20m
3. [ADD] Container for Zoo Animals as Application module @estimated 40m
4. [ADD] Logger and configured for whole app @estimated 30m
5. [COMPLETE] Sources from app were done @estimated 1h
6. [REMOVED] Nginx from docker @estimated 5m
7. [ADD] UnitTests @estimated 1h
8. [ADD] And configured PHPUnit Docker container @estimated 1h

### Requirements
PHP 7.0 CLI

### Install
No need Nginx. Just php7 CLI

```
docker-compose up
```

***(I can't sure thats all be alright, because it is my first experience with Docker)***

### Run
This small application can be runned from CLI. Please type from application/
Bird, dolphin, fish, penguin, monkey are available for you in my Zoo. 
Please type command below to show their capabilities: 

```
> cd application/
> php index.php {Animal}
```

You see something like 
```
web@kali:/var/www/zoo/application$ php index.php -a Dolphin
INFO > Hello, man! I'am Dolphin and today is my birthday Mon, 18 of Sep 08:26:39
INFO > I can't fly
INFO > I can't walk
INFO > I swimming faster than any fish in Zoo
INFO > I can give milk to my children, because I am a mammal
INFO > I want to eat! And it's time to get some fishes .. mmm
INFO > I already ate them and have to solve my problems )). Bye!

```

### UnitTests
```
> cd application/
> phpunit

```

***Summary estimate:*** 7h (+/- 30m)