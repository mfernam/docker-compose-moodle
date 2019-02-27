#!/bin/bash

echo "********************************************************";
echo "Moodle Installation Starts...";
echo "********************************************************";
echo "";

mysqlInstalled=`dpkg --get-selections | grep mysql`
apacheInstalled=`dpkg --get-selections | grep apache2`
phpInstalled=`dpkg --get-selections | grep php7`

if [[ $apacheInstalled == "" ]]; then
	echo "********************************************************";
	echo "Installating Apache... Please wait!";
	echo "********************************************************";
	apt -y install apache2
else 
	echo -e "\e[32m********************************************************";
	echo "Apache Installed";
	echo -e "********************************************************\e[0m";
fi

if [[ $mysqlInstalled == "" ]]; then
	echo "********************************************************";
	echo "Installating MySQL... Please wait!";
	echo "********************************************************";
	apt -y install mysql-server
	service mysql restart
	mysql_secure_installation
else
	echo -e "\e[32m********************************************************";
	echo "Mysql Installed";
	echo -e "********************************************************\e[0m";
fi

if [[ $phpInstalled == "" ]]; then
	echo "********************************************************";
	echo "Installating PHP... Please wait!";
	echo "********************************************************";
	service apache2 stop
	apt -y install php7.0-zip php7.0-dev php7.0 php7.0-mbstring php7.0-zip php7.0-fpm php7.0-mcrypt php7.0-gd php7.0-mysql php7.0-soap php7.0-cgi php7.0-cli php7.0-common php7.0-curl php7.0-intl php7.0-phpdbg php7.0-xml php7.0-json php7.0-pspell php7.0-xmlrpc libapache2-mod-php
	service apache2 start
else
	echo -e "\e[32m********************************************************";
	echo "PHP Installed";
	echo -e "********************************************************\e[0m";
fi


echo "********************************************************";
echo "Configuring mysql... ";
echo "********************************************************";
echo "Mysql root password: "
read mysqlPassword
echo "Moodle user: "
read moodleuser
echo "Host: "
read host
echo "Password: "
read password
mysql -h $host -u root -P $mysqlPassword -Bse "GRANT SELECT,INSERT,UPDATE,DELETE,CREATE,CREATE TEMPORARY TABLES,DROP,INDEX,ALTER ON moodle.* TO '$moodleuser'@'$host' IDENTIFIED BY '$password'; CREATE DATABASE moodle DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

echo "********************************************************";
echo "Installating Moodle... Please wait!";
echo "********************************************************";

wget "https://download.moodle.org/download.php/direct/stable36/moodle-latest-36.tgz" $PWD
tar -xzvf moodle-latest-36.tgz
rm moodle-latest-36.tgz
mv moodle/ /var/www/html/
mkdir /var/www/moodledata
chown www-data:www-data /var/www/moodledata/

# Problems founded after installation:
#
# Add to /etc/mysql/mariadb.conf.d/50-server.cnf this lines:
#
#	[mysqld]
#	innodb_file_format = Barracuda
#	innodb_large_prefix = 1
#	innodb_file_per_table = ON


