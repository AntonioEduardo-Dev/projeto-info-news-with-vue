FROM php:8.2-apache

# Instala pacotes e extensões PHP
RUN apt-get update && apt-get upgrade -y && apt-get install -y \
    apt-utils \
    nano \
    wget \
    dialog \
    build-essential \
    git \
    curl \
    zip \
    unzip \
    zlib1g-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    cron \
 && docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-install gd pdo pdo_mysql mysqli opcache

# Instala o Composer
RUN curl -sS https://getcomposer.org/installer \
    | php -- --install-dir=/usr/local/bin --filename=composer

# Ativa módulos do Apache
RUN a2enmod rewrite headers

# Copia os arquivos do projeto para o diretório padrão do Apache
COPY . /var/www/html/

# Ajusta permissões
RUN chown -R www-data:www-data /var/www/html

# Expõe a porta 80
EXPOSE 80
