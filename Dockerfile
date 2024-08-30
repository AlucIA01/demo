# Usa una imagen oficial de PHP con Apache
FROM php:8.1-apache

# Copia tu código fuente al contenedor
COPY . /var/www/html/

# Si necesitas instalar extensiones de PHP, puedes hacerlo aquí
RUN docker-php-ext-install pdo_mysql

# Expone el puerto 80
EXPOSE 80
