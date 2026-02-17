FROM php:8.2-apache

# Install system dependencies for SQLite
RUN apt-get update && apt-get install -y \
    sqlite3 \
    libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Set working directory
WORKDIR /var/www/html

# Copy backend files
COPY . .

# Fix permissions so SQLite file can be created
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
