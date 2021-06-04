# Laravel 5 - CRUD Example

## Requirements
```
Laravel 5.8.*
```
## Deploy the project

<b>Note:</b>
<br />
We will use $ to describe the commands that will be used with regular user.

1- Run the following commands in sequence to deploy the project in a development
environment:

$ cp .env.example .env

$ composer install

$ npm install

$ npm run dev

2- Create and configure database in .env.

$ php artisan key:generate

$ php artisan migrate

$ php artisan serve

3- Next, you may navigate to you URL http://127.0.0.1:8000/students

## Branches

-In the users-crud branch we can test a Laravel users crud.

You may navigate to you URL http://127.0.0.1:8000/users

-In the relationships branch we can test a Laravel crud, contains examples of one-to-many with subjects and students.

You may navigate to you URL http://127.0.0.1:8000/subjects and http://127.0.0.1:8000/students

-In the blade-example branch we can test examples of the extension of templates with blade.

You may navigate to you URL http://127.0.0.1:8000/students

-In the bootstrap-integration branch we can test example of a bootstrap integration in the project.

You may navigate to you URL http://127.0.0.1:8000/students
