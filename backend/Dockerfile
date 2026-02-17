FROM php:8.2-apache

# Install SQLite support
RUN docker-php-ext-install pdo pdo_sqlite

# Set Apache root
WORKDIR /var/www/html

# Copy backend files
COPY . .

# Fix permissions (important for SQLite file creation)
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
