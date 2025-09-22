#!/bin/bash
set -e

# Hanya download kalau belum ada wp-load.php
if [ ! -f /var/www/html/wp-load.php ]; then
  wp core download --locale=id_ID --allow-root
fi

wp config create \
  --dbname=$WORDPRESS_DB_NAME \
  --dbuser=$WORDPRESS_DB_USER \
  --dbpass=$WORDPRESS_DB_PASSWORD \
  --dbhost=$WORDPRESS_DB_HOST \
  --skip-check --allow-root --force

wp core install \
  --url=$SITE_URL \
  --title="Website Pondok Pesantren" \
  --admin_user=$WP_ADMIN_USER \
  --admin_password=$WP_ADMIN_PASS \
  --admin_email=$WP_ADMIN_EMAIL \
  --skip-email --allow-root

kalau ini gimana
