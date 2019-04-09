#!/bin/bash
set -e

chown www-data:www-data /var/www/moodledata/ /var/www/html/*

exec /usr/sbin/apache2ctl -D FOREGROUND
