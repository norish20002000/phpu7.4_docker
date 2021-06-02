FROM php:7.4-fpm

RUN apt-get update \
  && apt-get install -y \
  libicu-dev libonig-dev libzip-dev locales \
  vim \ 
  git \
  zip \
  unzip \
  && docker-php-ext-install zip pdo_mysql
ENV LANG ja_JP.UTF-8
ENV LANGUAGE ja_JP:ja
ENV LC_ALL ja_JP.UTF-8
ENV TZ JST-9
ENV TERM xterm

# エイリアス
RUN echo 'alias ll="ls -l"' >> ~/.bashrc

