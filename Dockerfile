FROM wordpress:php8.2-apache

COPY . /var/www/html/

COPY setup.sh /usr/local/bin/setup.sh
RUN chmod +x /usr/local/bin/setup.sh

CMD ["bash", "/usr/local/bin/setup.sh"]
