FROM php:8.0-apache

# Copy the content of your project into the container
COPY . /var/www/html/

# Ensure the apache server can read the content
RUN chown -R www-data:www-data /var/www/html

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy the custom Apache configuration file
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
