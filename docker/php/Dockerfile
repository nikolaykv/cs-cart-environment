FROM php:7.2-fpm-stretch
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libxml2-dev \
        libcurl3-dev \
        libmagickwand-dev --no-install-recommends \
    && docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install exif \
    && docker-php-ext-install soap \
    && docker-php-ext-install zip \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && docker-php-ext-install curl \
    && docker-php-ext-install sockets

ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini
WORKDIR /var/www/backend
RUN deluser www-data
RUN groupadd -g 1000 www-data
RUN useradd -u 1000 -ms /bin/bash -g www-data www-data

CMD ["php-fpm"]