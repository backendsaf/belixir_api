FROM php:8.2-fpm

# Установим системные зависимости и расширения
RUN apt-get update && apt-get install -y \
    git unzip libicu-dev libpq-dev libzip-dev libonig-dev \
    && docker-php-ext-install intl pdo pdo_mysql opcache zip

# Устанавливаем mc
RUN apt-get update && apt-get install -y mc \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Настройки PHP для разработки
COPY ./dev.ini /usr/local/etc/php/conf.d/dev.ini

WORKDIR /var/www/html
CMD ["php-fpm"] 