FROM nginx:alpine

COPY nginx.conf /etc/nginx

RUN apk update && apk upgrade && apk add --no-cache bash

ARG PHP_UPSTREAM_CONTAINER=php-fpm
ARG PHP_UPSTREAM_PORT=9000

RUN set -x ; \
    adduser -u 82 -D -S -G www-data www-data && exit 0 ; exit 1

RUN echo "upstream php-upstream { server ${PHP_UPSTREAM_CONTAINER}:${PHP_UPSTREAM_PORT}; }" > /etc/nginx/conf.d/default.conf

EXPOSE 80