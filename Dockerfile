FROM php:7.2.12-fpm
# Core, date, libxml, openssl, pcre, sqlite3, zlib, ctype, curl, dom, fileinfo, filter, ftp, hash, iconv, json, mbstring, SPL, PDO, session, posix, readline, Reflection, standard, SimpleXML, pdo_sqlite, Phar, tokenizer, xml, xmlreader, xmlwriter, mysqlnd, sodium
RUN php -r "echo implode(', ', get_loaded_extensions());";
RUN pecl install -o -f redis \
&&  rm -rf /tmp/pear \
&&  docker-php-ext-enable redis
#RUN curl -sL http://mirrors.kernel.org/ubuntu/pool/main/libp/libpng/libpng12-0_1.2.54-1ubuntu1_amd64.deb -o /libpng.deb
#RUN dpkg -i /libpng.deb
RUN apt-get update && apt-get install -y \
        procps \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        libzip-dev \
        libcurl4-openssl-dev \
        zlib1g-dev libicu-dev g++ \
        libreadline-dev \
        readline-common \
        libxml2-dev \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd \
    && docker-php-ext-install mbstring opcache \
    && docker-php-ext-install zip pdo_mysql intl soap mysqli \
    && docker-php-ext-install php-mongodb
EXPOSE 9000/tcp
