FROM php:8.1-apache

WORKDIR /var/www/html
COPY . /var/www/html 

RUN apt-get update && \
    apt-get install -y \
    git \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install
EXPOSE 80

CMD ["apache2-foreground"] 
RUN chown -R www-data:www-data /var/www/html 

COPY entrypoint.sh /usr/local/bin/ 
RUN chmod +x /usr/local/bin/entrypoint.sh 
CMD ["/usr/local/bin/entrypoint.sh"]
