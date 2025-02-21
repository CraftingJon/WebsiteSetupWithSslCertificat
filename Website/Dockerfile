FROM php:8.1-apache

# Aktiviert mod_rewrite für Apache
RUN a2enmod rewrite

# Installiert die MySQLi-Erweiterung für PHP
RUN docker-php-ext-install mysqli

# Kopiert die Apache-Konfiguration
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Setzt den Arbeitsordner
WORKDIR /var/www/html

# Exponiert Port 80
EXPOSE 80
