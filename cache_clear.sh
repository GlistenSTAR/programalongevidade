#!/usr/bin/env bash
#composer dump-autoload -o
php artisan cache:clear
php artisan view:clear
php artisan config:clear
php artisan config:cache
php artisan queue:restart
