# tournament_backend
A full-stack web application for managing chess tournaments, opponents, and results.

The frontend is https://github.com/dimis283/tournament-app
## Features

- User authentication (login/register) using Laravel Sanctum
- CRUD for tournaments and results
- Frontend with React and Material UI
- SQLite database for easy setup
## Requirements

- PHP >= 8.2
- Composer
- Node.js & npm
- SQLite

 ## SQLite Database

Create the SQLite file:

cd database

touch database.sqlite


Update the .env file:

DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database/database.sqlite
Replace /absolute/path/to/database/database.sqlite with the full path to the database.sqlite file on your machine.
This ensures Laravel knows where to find the SQLite database.

## Installation



```bash
composer install
cp .env.example .env
php artisan key:generate




Run migrations & seeder:

php artisan migrate --seed
php artisan migrate --seed


php artisan serve
