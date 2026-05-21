FROM php:8.4-apache

# System dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpq-dev \
    libzip-dev \
    libmariadb-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql zip \
    && apt-get clean

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

# Install PHP deps
RUN composer install --no-dev --optimize-autoloader

# Configure Laravel
RUN cp .env.example .env \
    && sed -i 's/APP_ENV=.*/APP_ENV=production/' .env \
    && sed -i 's|APP_URL=.*|APP_URL=https://balancamultiuso.onrender.com|' .env \
    && sed -i 's/APP_DEBUG=.*/APP_DEBUG=false/' .env \
    && sed -i '/^DB_/d' .env \
    && php artisan key:generate

# Permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Apache
RUN a2enmod rewrite
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# Start script (runs migrations on container start, then starts Apache)
COPY docker-start.sh /usr/local/bin/docker-start.sh
RUN chmod +x /usr/local/bin/docker-start.sh

EXPOSE 80
CMD ["docker-start.sh"]
