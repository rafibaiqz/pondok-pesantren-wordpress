#!/bin/bash
set -e

wp core download --locale=id_ID --allow-root

wp config create \
  --dbname=$WORDPRESS_DB_NAME \
  --dbuser=$WORDPRESS_DB_USER \
  --dbpass=$WORDPRESS_DB_PASSWORD \
  --dbhost=$WORDPRESS_DB_HOST \
  --skip-check --allow-root

wp core install \
  --url=$SITE_URL \
  --title="Website Pondok Pesantren" \
  --admin_user=$ADMIN_USER \
  --admin_password=$ADMIN_PASS \
  --admin_email=$ADMIN_EMAIL \
  --allow-root
