#!/bin/sh
uuidgen > /secret/secret.txt

php-fpm &

nginx -g "daemon off;"