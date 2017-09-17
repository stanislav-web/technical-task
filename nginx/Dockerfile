FROM nginx

MAINTAINER Stanislav WEB <stanisov@gmail.com>

ADD ./default.conf /etc/nginx/conf.d/

RUN echo "daemon off;" >> /etc/nginx/nginx.conf

CMD service nginx start