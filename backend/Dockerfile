FROM php:8.2-apache

# Enable mysqli
RUN docker-php-ext-install mysqli

# Copy backend files directly to Apache root
COPY . /var/www/html/

EXPOSE 80
