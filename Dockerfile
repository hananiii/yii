FROM php:7.4-apache
COPY . /var/www/html
RUN apt update && apt install -y git nano
RUN  curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN apt-get install --yes zip unzip && composer install
EXPOSE 80 