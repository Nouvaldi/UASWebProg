# UAS Web Programming (Amazing E-Grocery)

## Description

There is a web application called “Amazing E-Grocery”, which is the application that provideslimited items (only one in the stock) that can be purchased by online service.

## Requirements

- XAMPP
- Composer (Laravel 8)

## Installation

1. Create a new folder
2. Clone the project from this repository into the folder using CLI
```
git clone https://github.com/Nouvaldi/UASWebProg
```

## Setup

1. Open and start XAMPP
2. Create a database with your preferred name
3. Open the project using Visual Studio Code

> In terminal
4. Setup Laravel:
```
composer install
```
5. Copy .env.example file:
```
cp .env.example .env
```
6. Rename `DB_DATABASE` in .env with the same name in step 2
7. Generate application key:
```
php artisan key:generate
```
8. Link to storage:
```
php artisan storage:link
```
9. Migrate database and seeder:
```
php artisan migrate:fresh --seed
```
10. Run app:
```
php artisan serve
```

