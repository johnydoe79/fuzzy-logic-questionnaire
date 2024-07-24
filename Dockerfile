FROM php:8.2-fpm

RUN apt-get update -y
RUN apt-get -y install gcc make autoconf libc-dev pkg-config libzip-dev

RUN apt-get install -y --no-install-recommends --fix-missing \
	git \
    unzip \
	libz-dev \
	libpq-dev \
	libldap2-dev libbz2-dev \
	zlib1g-dev g++ \
	libssl-dev libssl-doc libsasl2-dev \
	curl libcurl4-openssl-dev

RUN apt-get install -y --no-install-recommends \
	libgmp-dev firebird-dev libib-util

RUN docker-php-ext-install pdo_pgsql

# Установим Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/symfony

# Copy existing application directory contents
COPY . /var/www/symfony

# Установим переменную окружения для Composer
ENV COMPOSER_ALLOW_SUPERUSER=1
ENV PATH /var/www/html:$PATH

# Install Symfony dependencies
RUN composer install

# Expose port 8000 and start php-fpm server
EXPOSE 8000
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
