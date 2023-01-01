FROM php:5.6-cli-stretch
RUN apt update && apt install -y libpq-dev libfreetype6-dev libjpeg62-turbo-dev libpng-dev \
&& docker-php-ext-configure gd --with-freetype --with-jpeg \
&& docker-php-ext-install gd \
&& docker-php-ext-install pdo_pgsql \
&& docker-php-ext-install pdo_mysql \
&& echo "date.timezone=Asia/Jakarta" > /usr/local/etc/php/conf.d/timezone.ini \
&& echo "mbstring.func_overload = 0" > /usr/local/etc/php/conf.d/mbstring.ini
