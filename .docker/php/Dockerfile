FROM php:7.3-fpm-alpine

# Add composer from Docker image (multi-stage build)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install required extensions
RUN set -ex \
    && apk add --no-cache \
        autoconf \
        g++ \
        make \
        icu-dev \
        bash

RUN docker-php-ext-install \
    intl \
    opcache \
    pdo \
    pdo_mysql \
    mysqli \
    exif \
    mbstring

# Install extensions from PECL
RUN pecl install \
    apcu \
    xdebug

RUN docker-php-ext-enable \
    apcu \
    xdebug

WORKDIR /home/laravel

COPY php.ini /usr/local/etc/php/conf.d/
