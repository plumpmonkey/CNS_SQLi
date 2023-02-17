FROM mysql:8.0.31
ENV MYSQL_ROOT_PASSWORD=uwe
ENV MYSQL_DATABASE=users
ENV MYSQL_USER=uwe
ENV MYSQL_PASSWORD=uwe

COPY ./lab_users.sql /docker-entrypoint-initdb.d/

