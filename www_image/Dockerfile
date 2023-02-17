FROM ubuntu:20.04
ARG DEBIAN_FRONTEND=noninteractive
ARG WWWDir=/var/www/SQL_Injection

RUN apt update  \
    && apt -y install  \
        apache2 \
        nano   \
        binutils \
        curl \
        iproute2 \
        iputils-ping \
        net-tools \
# PHP
        libapache2-mod-php7.4 \
        php7.4-cli \
        php7.4-gd \
        php7.4-pdo \
        php7.4-json \
        php7.4-xml \
        php7.4-mbstring \
        php7.4-mysql \
    && a2enmod rewrite \
    && a2enmod ssl \
    && a2enmod cgi \
    && a2enmod headers

#COPY www ${WWWDir}
COPY www /var/www/html

COPY apache_sql_injection.conf /etc/apache2/sites-available

RUN a2ensite apache_sql_injection.conf

CMD service apache2 start && tail -f /dev/null