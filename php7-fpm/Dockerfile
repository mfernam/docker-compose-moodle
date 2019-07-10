FROM php:7.0-fpm
LABEL Description="Docker with php libs needed to deploy moodle"

RUN apt-get update && apt-get install -y \
    libzip-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libxml2-dev ucf locales libicu-dev \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-configure zip --with-libzip \
    && docker-php-ext-configure pdo_mysql --with-mysql=mysqlnd \
    && docker-php-ext-configure intl \
    && docker-php-ext-configure mysqli --with-mysqli=mysqlnd \
    && docker-php-ext-install -j$(nproc) gd iconv \
    mysqli pdo pdo_mysql zip opcache \
    xmlrpc soap intl