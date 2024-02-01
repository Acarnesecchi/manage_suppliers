FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git \ 
    curl \
    vim \
    unzip \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo pdo_mysql

RUN a2enmod rewrite

COPY server.conf /etc/apache2/conf-available/server.conf

RUN a2enconf server

WORKDIR /var/www/html

COPY . .

RUN curl -sS https://getcomposer.org/installer | php \
    && php composer.phar install \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 777 /var/www/html/var

EXPOSE 80

CMD ["apache2-foreground"]