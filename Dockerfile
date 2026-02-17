FROM php:8.2-apache

RUN docker-php-ext-install mysqli

# Copy backend files into Apache root
COPY backend/ /var/www/html/

EXPOSE 80
