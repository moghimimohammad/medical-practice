# Mini Medical Practice

## Setup the project

### Install PHP packages

`composer install`

### build 
Run the sail command to bulid and run the containers:

`sail up`

or if it is not installed globally

`./vendor/bin/sail up`

### run migration

`sail artisan migrate`

### Seed database

`sail artisan db:seed UserSeeder`

`sail artisan db:seed PracticeSeeder`

### open the app

open browser and got to http://127.0.0.1/

A user is added to the database with these credentials:

email: admin@example.com
password: password

## Deployment

The project was deployed to Heroku. You can find it here:

http://mini-medical-practice.herokuapp.com/