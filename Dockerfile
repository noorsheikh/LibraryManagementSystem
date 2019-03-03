FROM php:7.3-apache

RUN apt-get update
RUN apt-get install -y vim \
    wget \
    git \
    zip \
    unzip

COPY composer.json composer.lock /var/www/html/
WORKDIR /var/www/html

RUN wget https://getcomposer.org/installer \
    && php ./installer --version=1.8.4 \
    && rm installer

RUN php composer.phar install

COPY . /var/www/html

RUN ls -la

# RUN php ./bin/console library:generate:book-and-copies 50 3

RUN a2enmod rewrite

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN echo "DocumentRoot /var/www/html" >> /etc/apache2/apache2.conf
# RUN echo "LoadModule rewrite_module modules/mod_rewrite.so" >> /etc/apache2/apache2.conf

EXPOSE 80

CMD ["apache2-foreground"]