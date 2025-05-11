FROM php:8.2-apache

# Instalar dependencias y extensiones PHP necesarias
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install zip

# Configurar Apache
RUN a2enmod rewrite
RUN service apache2 restart

# Establecer directorio de trabajo
WORKDIR /var/www/html

# Copiar archivos de la aplicación
COPY . /var/www/html/

# Establecer permisos
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Exponer puerto
EXPOSE 80

# Comando para iniciar Apache en primer plano
CMD ["apache2-foreground"]