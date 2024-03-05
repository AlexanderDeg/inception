#!/bin/bash

grep -E "listen = 127.0.0.1" /etc/php82/php-fpm.d/www.conf > /dev/null 2>&1

if [ $? -eq 0 ]; then
	sed -i "s/.*listen = 127.0.0.1.*/listen = 9000/g" /etc/php82/php-fpm.d/www.conf
	echo "env[DB_HOST] = \$DB_HOST" >> /etc/php82/php-fpm.d/www.conf
	echo "env[DB_USER] = \$DB_USER" >> /etc/php82/php-fpm.d/www.conf
	echo "env[DB_PASS] = \$DB_PASS" >> /etc/php82/php-fpm.d/www.conf
	echo "env[DB_NAME] = \$DB_NAME" >> /etc/php82/php-fpm.d/www.conf
fi

# Wait MariaDB to be Prepared (MariaDB Container is Running Daemon by the Script, not Daemon Directly)
sleep 5;

# Check Whether Database Server is Alive or Not
#if ! mysqladmin -h $DB_HOST -u $DB_USER --password=$DB_PASS --wait=60 ping > /dev/null; then
#	printf "MariaDB Daemon Unreachable\n"
#	exit 1
#fi

echo >&2 "About to set domain name and admin..."
wp core install \
	--url=${DOMAIN_NAME} \
	--title=${WP_TITLE} \
	--admin_user=${WP_ADMIN_USER} \
	--admin_password=${WP_ADMIN_PASS} \
	--admin_email=${WP_ADMIN_EMAIL} --skip-email --allow-root

echo >&2 "Creating user..."
wp user create --porcelain \
	"${WP_USER}" "${WP_USER_EMAIL}" --role=author --user_pass="${WP_USER_PASS}" --allow-root
wp plugin update --all
/usr/sbin/php-fpm82 -F
echo >&2 "Wordpress is available"
