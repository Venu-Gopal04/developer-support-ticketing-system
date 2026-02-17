FROM php:8.2-apache

RUN docker-php-ext-install mysqli

# Force Apache document root
ENV APACHE_DOCUMENT_ROOT=/var/www/html

RUN sed -ri 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf

COPY . /var/www/html/

EXPOSE 80
