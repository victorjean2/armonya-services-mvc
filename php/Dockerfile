FROM php:8.5-apache

RUN apt-get update && apt-get install -y msmtp msmtp-mta \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

RUN a2enmod rewrite

COPY msmtprc /etc/msmtprc
RUN chmod 644 /etc/msmtprc

RUN echo "sendmail_path=/usr/bin/msmtp -t" > /usr/local/etc/php/conf.d/mail.ini