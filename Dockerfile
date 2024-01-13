# Use the official PHP 8 image
FROM php:8.1-apache

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Install necessary dependencies
RUN apt-get update && \
    apt-get install -y \
    git \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install app dependencies
RUN composer install

# Expose port 80 for Apache
EXPOSE 80

# Run Apache when the container starts
CMD ["apache2-foreground"]

# Copy custom Apache vhost configuration
#COPY custom-vhost.conf /etc/apache2/sites-available/000-default.conf

