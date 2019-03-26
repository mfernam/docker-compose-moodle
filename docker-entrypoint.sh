chown www-data:www-data /var/www/moodledata/

ENTRYPOINT ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
