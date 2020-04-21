FROM composer

RUN apk upgrade --update && apk add libpng-dev \
                                    freetype-dev \
                                    libjpeg-turbo-dev \
                                    libpng-dev

RUN docker-php-ext-install gd