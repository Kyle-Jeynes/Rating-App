FROM php:8.2-fpm

RUN groupadd -g 101 nginx && \
    useradd -u 101 -ms /bin/bash -g nginx nginx

WORKDIR /var/www/html

USER nginx

EXPOSE 9000

CMD ["php-fpm"]