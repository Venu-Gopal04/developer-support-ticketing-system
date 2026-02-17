FROM php:8.2-apache

# Enable mysqli
RUN docker-php-ext-install mysqli

# Copy ALL backend files (we are already inside backend/)
COPY . /var/www/html/

EXPOSE 80
