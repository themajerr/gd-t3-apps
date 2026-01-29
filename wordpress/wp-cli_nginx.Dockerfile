FROM nginx:trixie

RUN apt update \
    && apt install -y \
    php-fpm \
    php8.4-mysql

RUN useradd wordpress --shell /bin/bash

WORKDIR /opt
# WP CLI INSTALL
RUN curl --output wp https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod +x wp \
    && mv wp /usr/bin/wp \
    && wp --info

RUN mkdir --mode 775 wordpress \
    && chown -R wordpress: wordpress/
    
USER wordpress

RUN wp core download --path=/opt/wordpress --locale=en_US

COPY nginx.conf /etc/nginx/nginx.conf
COPY --chmod=755 45-enable-php.sh /docker-entrypoint.d/
COPY wordpress_pool.conf /etc/php/8.4/fpm/pool.d/www.conf

# ENV PHP_EXTRA_CONFIGURE_ARGS --enable-fpm --with-fpm-user=wo --with-mysqli

USER root
EXPOSE 8080