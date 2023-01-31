FROM php:8.1-apache
RUN apt-get update -y
RUN apt-get upgrade -y
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql
RUN a2enmod rewrite