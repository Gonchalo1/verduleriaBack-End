# Usa la imagen oficial de PHP con Apache
FROM php:8.1-apache

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instala las dependencias necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

# Instala extensiones de PHP requeridas manualmente
RUN docker-php-source extract \
    && apt-get install -y \
        zlib1g-dev \
        libzip-dev \
        libxml2-dev \
        libssl-dev \
    && docker-php-ext-install pdo_mysql mysqli mbstring exif pcntl bcmath xml ctype json \
    && docker-php-ext-enable openssl \
    && docker-php-source delete

# Habilita mod_rewrite de Apache
RUN a2enmod rewrite

# Copia el código de tu aplicación al contenedor
COPY . /var/www/html

# Permite que Apache escriba en los directorios necesarios
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exponer el puerto 80
EXPOSE 80

# Comando para iniciar Apache en primer plano
CMD ["apache2-foreground"]
