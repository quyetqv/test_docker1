FROM php:8.2-fpm

# Cài các extension cần cho Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    && docker-php-ext-install pdo_mysql mbstring bcmath exif pcntl gd dom xml xmlwriter
    
RUN chown -R www-data:www-data /var/www
# Cài composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
WORKDIR /var/www


COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh
ENTRYPOINT ["/entrypoint.sh"]