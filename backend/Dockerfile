FROM php:8.2-apache

# Enable mysqli
RUN docker-php-ext-install mysqli

# Copy backend files into Apache root
COPY . /var/www/html/

# Ensure permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
