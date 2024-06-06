# Utilizamos una imagen base de PHP 7.4 con FPM
FROM php:7.4-fpm

# Directorio de trabajo en el contenedor
WORKDIR /var/www/html

# Instalamos las dependencias necesarias para PostgreSQL
RUN apt-get update && \
    apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Copiamos los archivos de la aplicación al contenedor
COPY . .

# Instalamos las dependencias de Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instalamos las dependencias del proyecto
RUN composer install

# Exponemos el puerto 8000 para acceder a la aplicación
EXPOSE 8000

# Comando por defecto para iniciar el servidor de Laravel
CMD php artisan serve --host=0.0.0.0 --port=8000
