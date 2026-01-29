FROM nginx:trixie

RUN apt update \
    && apt install -y \
    php-fpm \
    php8.4-mysql \
    wget

WORKDIR /opt

RUN wget https://wordpress.org/latest.tar.gz \
    && tar -xzvf latest.tar.gz \
    && rm latest.tar.gz \
    && rm /etc/php/8.4/fpm/pool.d/www.conf \
    && chmod -R +x wordpress \
    && chown -R nginx wordpress/


COPY nginx.conf /etc/nginx/nginx.conf
COPY --chmod=755 45-enable-php.sh /docker-entrypoint.d/
COPY wordpress_pool.conf /etc/php/8.4/fpm/pool.d/

# RUN useradd wordpress
#     && touch /var/log/php8.4-fpm.log \
#     && chown wordpress:wordpress /var/log/php8.4-fpm.log \
#     && chmod 644 /var/log/php8.4-fpm.log

# USER wordpress
ENV PHP_EXTRA_CONFIGURE_ARGS --enable-fpm --with-fpm-user=nginx --with-mysqli
EXPOSE 8080