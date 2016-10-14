# Code challenge

## How to Deploy

1. git clone repository
2. Into directory  repo  write composer install  if you don't have composer install [here](https://getcomposer.org/)
3. Copy .env.example to .env in file project
4. create database example: "shorten" in your mysql client  and write in  .env  user, password, database and host database
Example:


APP_URL=http://yourdoamin

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=shorten
DB_USERNAME=userdb
DB_PASSWORD=secret

5. Execute command "php artisan key:generate" then "php artisan migrate"
6. For run server "php artisan serve"


Use Laravel 5.3,required php version >= 5.6.9 and  MySQL 5.x

## Usage

- Go to [localhost:8000](localhost:8000)
- Write URL large  and convert to shorten URL

- For see stats Go to [localhost:8000/stats](localhost:8000/stats)
