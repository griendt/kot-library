FROM php:7.3-apache

# Setup working directory
WORKDIR /var/www

COPY . /var/www

# Install composer
ENV COMPOSER_HOME /composer
ENV PATH ./vendor/bin:/composer/vendor/bin:$PATH
ENV COMPOSER_ALLOW_SUPERUSER 1
RUN curl -s https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer

RUN composer install

# Apache settings
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN a2enmod rewrite headers

# Install mysql
RUN apt-get update
RUN apt-get install -y mariadb-client
# default-mysql-client

# Install php PDO driver
RUN docker-php-ext-install pdo_mysql


EXPOSE 80

CMD apache2-foreground
