FROM php:8.4-fpm

# Install needed extensions
RUN apt-get update && apt-get install -y \
    unzip \
    libsqlite3-dev \
    libicu-dev \
    && docker-php-ext-install pdo pdo_sqlite intl

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

# Install Node binaries NOT needed — user will build locally

WORKDIR /var/www/html

# Permissions for Laravel storage + bootstrap
RUN mkdir -p /var/www/html && chown -R www-data:www-data /var/www/html
