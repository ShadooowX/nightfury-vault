FROM php:7.4-apache
RUN a2enmod rewrite
COPY public/ /var/www/html/
COPY root/ /root/
COPY home/www-data/debug /home/www-data/debug
RUN chmod +s /home/www-data/debug && chmod 755 /home/www-data/debug && chown root:root /home/www-data/debug
RUN chmod 600 /root/flag.txt
RUN chown -R www-data:www-data /var/www/html
WORKDIR /var/www/html