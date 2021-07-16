FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
    php-curl \
    php-cli \
    php-common \
    php-fpm \
    git

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN a2deamon rewrite

# install composer
RUN curl -sS https://getcomposer.org/installer | php

RUN mv composer.phar /usr/local/bin/composer

RUN chmod +x /usr/local/bin/composer

# copy to /var/www/html
COPY . /var/www/html

# run composer
RUN composer install

EXPOSE 80