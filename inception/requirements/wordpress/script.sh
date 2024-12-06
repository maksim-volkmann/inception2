#!/bin/bash
cd /var/www/html
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar

# Read secrets from files
DB_NAME=$(cat $DB_NAME_FILE)
DB_USER=$(cat $DB_USER_FILE)
DB_PASS=$(cat $DB_PASSWORD_FILE)
ADMIN_USER=$(cat $ADMIN_USER_FILE)
ADMIN_PASS=$(cat $ADMIN_PASSWORD_FILE)

# DOMAIN_NAME is set in the environment or provide a default
DOMAIN_NAME=${DOMAIN_NAME:-localhost}

./wp-cli.phar core download --allow-root
./wp-cli.phar config create --dbname=$DB_NAME --dbuser=$DB_USER --dbpass=$DB_PASS --dbhost=mariadb --allow-root
./wp-cli.phar core install --url=https://$DOMAIN_NAME --title=inception --admin_user=$ADMIN_USER --admin_password=$ADMIN_PASS --admin_email=admin@admin.com --allow-root
./wp-cli.phar option update siteurl "https://$DOMAIN_NAME" --allow-root
./wp-cli.phar option update home "https://$DOMAIN_NAME" --allow-root

# Explicitly create wp-content/uploads and set permissions
mkdir -p wp-content/uploads
chmod -R 0777 wp-content/uploads

php-fpm8.2 -F
