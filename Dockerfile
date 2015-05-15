FROM ubuntu:latest

RUN apt-get update
RUN apt-get install emacs24-nox -y
RUN apt-get install php5 php5-mysql php5-mcrypt php5-dev -y
RUN apt-get install php-pear

ENV TERM xterm-256color

#install nginx
RUN apt-get update
RUN apt-get install -y build-essential software-properties-common python-software-properties
RUN add-apt-repository -y ppa:nginx/stable

RUN apt-get update
RUN apt-get install -y --force-yes php5-fpm php5-curl php5-mcrypt
RUN apt-get install -y nginx

RUN usermod -a -G root www-data
RUN usermod -u 1000 www-data

RUN sed -i "s/;date.timezone =.*/date.timezone = UTC/" /etc/php5/fpm/php.ini
RUN sed -i "s/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/" /etc/php5/fpm/php.ini

#nginx config
RUN echo "daemon off;" >> /etc/nginx/nginx.conf
ADD nginx_conf /etc/nginx/sites-enabled/comments

RUN mkdir -p /var/www

# Run the command on container startup
CMD php5-fpm -c /etc/php5/fpm && nginx
