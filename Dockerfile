FROM php:7.4-apache
COPY . /var/www/html
RUN apt update && apt install -y git nano
EXPOSE 80 
VOLUME [ "/"]
# VOLUME [ "/web/index.php" ]