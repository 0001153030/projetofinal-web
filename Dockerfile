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
    && docker-php-ext-install pdo pdo_mysql zip \
    && apt-get clean

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Node.js
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

WORKDIR /var/www/html

# Copy dependency manifests first (layer caching)
COPY package*.json composer.json composer.lock ./

# Install PHP deps (no scripts yet — app code not present)
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Install Node deps
RUN npm ci

# Copy the rest of the application
COPY . .

# Build frontend assets (generates public/build/manifest.json)
RUN npm run build

# Configure Laravel for production
RUN cp .env.example .env \
    && sed -i 's/APP_ENV=.*/APP_ENV=production/' .env \
    && sed -i 's|APP_URL=.*|APP_URL=https://balancamultiuso.onrender.com|' .env \
    && sed -i 's/APP_DEBUG=.*/APP_DEBUG=false/' .env \
    && php artisan key:generate

# Composer dump-autoload now that app code is present
RUN composer dump-autoload --optimize

# Permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Apache
RUN a2enmod rewrite
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 80
