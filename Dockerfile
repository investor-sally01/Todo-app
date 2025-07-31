FROM php:8.1-cli

WORKDIR /var/www/html

COPY . .

RUN apt-get update && apt-get install -y unzip libzip-dev zip libpng-dev libonig-dev git curl \
    && docker-php-ext-install pdo pdo_mysql mbstring zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install

# Fix permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Set document root to public
WORKDIR /var/www/html/public

CMD ["php", "-S", "0.0.0.0:80", "-t", "."]
