#!/bin/bash

#
# Copyright (C) WeAstronauts Software - All Rights Reserved 2022.
# Unauthorized copying of this file, via any medium is strictly prohibited
# Proprietary and confidential
#

# Default entrypoint, used in Dockerfile

echo "Running startscript"

php artisan config:cache
php artisan route:cache

date +'%Y-%m-%d %T' > startedAt.txt

exec "php-fpm"
