#!/bin/sh
set -e

# Cài đặt composer nếu chưa có vendor
if [ ! -d "vendor" ]; then
  composer install
fi

# Tiếp tục các lệnh khác nếu cần

# Khởi động Laravel
php artisan serve --host=0.0.0.0 --port=9000