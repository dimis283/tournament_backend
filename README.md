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

## Installation

### Backend (Laravel)

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
