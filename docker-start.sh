#!/bin/bash
php artisan migrate --force --isolated
exec apache2-foreground
