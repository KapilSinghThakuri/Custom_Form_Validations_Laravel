### Custom Validations Using Rule Objects
- Command for making rule file :
- php artisan make:rule Uppercase

### Multi-User Custom Authentications System
- Command for making Controller,Model,Migrations,Middleware
- php artisan make:controller CustomAuthController
- php artisan make:migration create_users_table
- php artisan make:model User ( or You can make model/migration at same time by passing -m flag to command)
- php artisan make:middleware isLoggedIn
