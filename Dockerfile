FROM php:7.4-apache

RUN apt-get update && \
    apt-get clean

COPY app /var/www/html/
