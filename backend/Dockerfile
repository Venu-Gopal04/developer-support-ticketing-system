FROM php:8.2-apache

RUN docker-php-ext-install mysqli

# Copy everything from backend/ (build context) into Apache root
COPY . /var/www/html/

EXPOSE 80
