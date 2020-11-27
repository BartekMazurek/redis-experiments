FROM php:7.4-fpm

RUN apt-get update && apt-get install -y

RUN pecl install apcu && docker-php-ext-enable apcu
RUN pecl install redis && docker-php-ext-enable redis

WORKDIR /var/www/html/redis