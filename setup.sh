#!/bin/bash
source .env

wp core download --locale=id_ID --allow-root

wp config create \
  --dbname=$DB_NAME \
  --dbuser=$DB_USER \
  --dbpass=$DB_PASSWORD \
  --dbhost=$DB_HOST \
  --skip-check --allow-root

wp core install \
  --url=$SITE_URL \
  --title="Website Pondok Pesantren" \
  --admin_user=$ADMIN_USER \
  --admin_password=$ADMIN_PASS \
  --admin_email=$ADMIN_EMAIL \
  --allow-root
