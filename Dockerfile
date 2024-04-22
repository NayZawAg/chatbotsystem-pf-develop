FROM php:8.0.10-fpm-alpine

# INSTALL ZIP TO USE COMPOSER
RUN apk upgrade --update && apk --no-cache add \
        icu-dev \
        autoconf \
        make \
        g++ \
        gcc \
        curl-dev \
        git \
        zip \
        unzip \
        libzip-dev \
        zlib-dev \
        openssl \
        oniguruma-dev

# INSTALL AND UPDATE COMPOSER
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer self-update

RUN mkdir /var/www/html/chatbot
WORKDIR /var/www/html/chatbot
