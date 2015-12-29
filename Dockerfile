FROM php:5.6-apache
MAINTAINER ukatama dev.ukatama@gmail.com

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update -y -q
RUN apt-get install -y -q git

RUN apt-get install -y -q libmcrypt-dev
RUN docker-php-ext-install mcrypt

RUN docker-php-ext-install pdo pdo_mysql

ADD trpg /var/www/html
ADD database.php /var/www/html/Config/

RUN cd /var/www/html && composer install

RUN a2enmod rewrite

EXPOSE 80
