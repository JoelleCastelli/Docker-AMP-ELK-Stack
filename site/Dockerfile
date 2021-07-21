FROM php:7.4-apache

RUN docker-php-ext-install pdo mysqli pdo_mysql
RUN pecl install -o -f redis &&  rm -rf /tmp/pear &&  docker-php-ext-enable redis

# Workaround for write permission on write to MacOS X volumes
RUN usermod -u 1000 www-data