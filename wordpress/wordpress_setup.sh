#!/bin/bash
wp config create --dbname=wordpress --dbuser=wordpress --dbpass=MariaDB11! --dbhost=mariadb-galera
wp core install --url=localhost:8080 --title=test --admin_user=admin --admin_password=admin --admin_email=admin@email.local --locale=en_US