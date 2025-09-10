FROM wordpress:php8.2-apache

RUN apt-get update && apt-get install -y less mariadb-client curl \
    && rm -rf /var/lib/apt/lists/* \
    && curl -o /usr/local/bin/wp https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod +x /usr/local/bin/wp

COPY . /var/www/html/

COPY setup.sh /usr/local/bin/setup.sh
RUN chmod +x /usr/local/bin/setup.sh

CMD ["bash", "/usr/local/bin/setup.sh"]
