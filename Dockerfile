# Dockerfile with apache server, php engine and moodle files
FROM debian:latest as moodle

LABEL Miguel Fernandez <losmeusm@gmail.com>
LABEL build_version=0.1
ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update && \
    apt-get install -y apache2 php7.0-zip \
    php7.0  \
    php7.0-mbstring  \
    php7.0-zip  \
    php7.0-fpm  \
    php7.0-mcrypt  \
    php7.0-gd  \
    php7.0-mysql  \
    php7.0-soap  \
    php7.0-cgi  \
    php7.0-cli  \
    php7.0-common  \
    php7.0-curl  \
    php7.0-intl  \
    php7.0-phpdbg  \
    php7.0-xml  \
    php7.0-json  \
    php7.0-pspell  \
    php7.0-xmlrpc  \
    libapache2-mod-php \
    wget nano && rm -rf /var/lib/apt/lists/*

RUN /etc/init.d/apache2 stop  && a2enmod php7.0 && /etc/init.d/apache2 start

EXPOSE 80 
WORKDIR /tmp
ADD "https://download.moodle.org/download.php/direct/stable36/moodle-latest-36.tgz" /tmp 
RUN tar -xzvf moodle-latest-36.tgz && rm moodle-latest-36.tgz && rm /var/www/html/index.html && \
    mv /tmp/moodle/* /var/www/html/ 

WORKDIR /var/www/
RUN mkdir /var/www/moodledata && chown www-data:www-data /var/www/moodledata/

ENTRYPOINT ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
