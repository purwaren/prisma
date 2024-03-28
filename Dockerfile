FROM php:8.3.4-fpm-alpine3.18
## install php-cli
RUN apk update && apk upgrade
RUN apk add --no-cache gd libpng libpng-dev freetype libjpeg-turbo freetype-dev libjpeg-turbo-dev zlib-dev \
&& docker-php-ext-configure gd --with-freetype --with-jpeg \
&& docker-php-ext-install gd && apk del --no-cache libpng-dev freetype-dev libjpeg-turbo-dev zlib-dev
RUN apk add --no-cache postgresql-dev && docker-php-ext-install pdo_pgsql 
RUN docker-php-ext-install pdo_mysql
RUN apk add --no-cache libzip-dev  && docker-php-ext-install zip 
RUN echo "date.timezone=Asia/Jakarta" > /usr/local/etc/php/conf.d/timezone.ini \
&& echo "mbstring.func_overload = 0" > /usr/local/etc/php/conf.d/mbstring.ini \
&& echo "post_max_size = 20M" > /usr/local/etc/php/conf.d/post.ini \
&& echo "upload_max_filesize = 20M" > /usr/local/etc/php/conf.d/upload.ini \
&& echo "max_execution_time=300" >> /usr/local/etc/php/conf.d/upload.ini \
&& echo "memory_limit=512M" > /usr/local/etc/php/conf.d/memory.ini