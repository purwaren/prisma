FROM php:7.2.34-cli-alpine
## install php-cli
RUN apk update && apk upgrade
RUN apk add --no-cache libpng libpng-dev && docker-php-ext-install gd && apk del libpng-dev 
RUN apk add --no-cache postgresql-dev && docker-php-ext-install pdo_pgsql 
RUN docker-php-ext-install pdo_mysql
RUN apk add --no-cache libzip-dev  && docker-php-ext-install zip 
RUN echo "date.timezone=Asia/Jakarta" > /usr/local/etc/php/conf.d/timezone.ini \
&& echo "mbstring.func_overload = 0" > /usr/local/etc/php/conf.d/mbstring.ini \
&& echo "post_max_size = 20M" > /usr/local/etc/php/conf.d/post.ini \
&& echo "upload_max_filesize = 20M" > /usr/local/etc/php/conf.d/upload.ini \
&& echo "max_execution_time=300" >> /usr/local/etc/php/conf.d/upload.ini \
&& echo "memory_limit=512M" > /usr/local/etc/php/conf.d/memory.ini
RUN mkdir /app
WORKDIR /app
ADD conf/entrypoint.sh .
ADD conf/custom.ini /usr/local/etc/php/conf.d/