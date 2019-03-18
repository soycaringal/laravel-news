# Laravel News

## Installation

``` bash
# Install dependencies
composer install

# Create file .env
cp .env.example .env

update database credentials in .env file

# Generate key
php artisan key:generate

# Run migrations (tables and Seeders)
php artisan migrate --seed

# Create Server
php artisan serve

# Access project
http://localhost:8080
```