#!/bin/sh

sleep 5
php artisan key:generate
php artisan migrate --force


exec php-fpm
