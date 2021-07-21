FROM php:7.4-apache

RUN docker-php-ext-install pdo mysqli pdo_mysql
RUN apt-get update -y && apt-get install -y libpng-dev libfreetype6-dev libyaml-dev
RUN pecl install yamL
RUN docker-php-ext-configure gd \
        --with-freetype=/usr/include/freetype2 \
    && docker-php-ext-install gd

RUN pecl install -o -f redis &&  rm -rf /tmp/pear &&  docker-php-ext-enable redis

# Workaround for write permission on write to MacOS X volumes
RUN usermod -u 1000 www-data

# Enable Apache mod_rewrite
RUN a2enmod rewrite