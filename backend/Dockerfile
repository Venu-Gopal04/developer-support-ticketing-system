FROM php:8.2-apache

# Enable mysqli
RUN docker-php-ext-install mysqli

# Set Apache DocumentRoot to /var/www/html
ENV APACHE_DOCUMENT_ROOT=/var/www/html

RUN sed -ri \
  -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
  /etc/apache2/sites-available/*.conf \
  /etc/apache2/apache2.conf \
  /etc/apache2/conf-available/*.conf

# Copy backend files into Apache root
COPY . /var/www/html/

EXPOSE 80
