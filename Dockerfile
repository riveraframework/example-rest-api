# base this image on the PHP image that comes with Apache https://hub.docker.com/_/php/
FROM php:7.1-apache

# install mysql-client and curl for our data init script
# install the PHP extension pdo_mysql for our connection script
# clean up
RUN apt-get update \
  && apt-get install -y mysql-client curl git autoconf libcurl4-gnutls-dev libxml2 libxml2-dev  zlib1g zlib1g-dev libmemcached-dev \
  && docker-php-ext-install pdo_mysql \
  && apt-get clean \
  && rm -rf /var/cache/apt/archives

# Configure apache
ENV APACHE_DOCUMENT_ROOT /var/www/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf \
    && a2enmod rewrite \
    && a2enmod setenvif \
    && rm -rf /var/www/html