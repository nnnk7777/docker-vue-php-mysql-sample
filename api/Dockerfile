FROM php:7.4-apache

RUN apt-get update
RUN set -ex apk --no-cache add postgresql-dev libpq-dev
RUN apt-get install -y vim htop libpq-dev libonig-dev
RUN docker-php-ext-install mbstring pdo_mysql opcache


COPY php.ini /usr/local/etc/php/php.ini
COPY ./src /var/www/html