# Используем PHP 8.0
FROM php:8.2-fpm

# Устанавливаем системные зависимости
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libjpeg-dev \
    libpng-dev \
    libfreetype6-dev \
    libzip-dev \
    zip

# Устанавливаем PHP-расширения
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql bcmath zip

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Копируем код проекта
WORKDIR /var/www/html
COPY . .

# Устанавливаем права на папки
RUN chmod -R 777 storage bootstrap/cache

# Указываем порт
EXPOSE 9000
