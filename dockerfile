# Use the official PHP image with Apache
FROM php:8.2-apache

# Enable Apache's rewrite module for better URL handling
RUN a2enmod rewrite

# Copy your PHP file into the web server's document root
COPY index.php /var/www/html/index.php

# Give Apache read permissions
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Expose the default port for Apache
EXPOSE 80
