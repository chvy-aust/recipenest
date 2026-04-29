<p align="center"><img src="/public/images/logo.svg" width="400" alt="RECIPEnest Logo"></p>

<p align="center">
<a href="https://github.com/laravel/laravel"><img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge=laravel&logoColor=white" alt="Laravel"></a>
<a href="https://github.com/twbs/bootstrap"><img src="https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge=bootstrap&logoColor=white" alt="Bootstrap"></a>
<a href="https://github.com/filamentphp/filament"><img src="https://img.shields.io/badge/filament-%23FDAE4B.svg?style=for-the-badge=filament&logoColor=black" alt="Filament"><a>
<a href="https://github.com/livewire/livewire"><img src="https://img.shields.io/badge/livewire-%234e56a6.svg?style=for-the-badge=livewire&logoColor=white" alt="Livewire"></a>
</p>

## RECIPEnest

The RECIPEnest web application is a dedicated portal for recipe sharing. Not only does it intend to connect chefs worldwide, but it prioritize the overall user experience above all else. Developed with the Laravel and Bootsrap framework, RECIPEnest offers the following core features:

- **Recipe** and **Chef Discovery** with **Tag Filtering**
- Customizable **Chef Profile** and **Portfolio**
- Dedicated **User Dashboard** with **Chef Analytics**
- Centralized **Recipe Management**
- **Recipe Commenting**

... *and many, many more to come!*


## Software Requirements

- Laravel Herd | Version 1.24.0 [(download here)](https://herd.laravel.com/windows)
- PhpMyAdmin (Optional)	| Version 5.2.3 [(download here)](https://www.phpmyadmin.net/downloads/)
- Git | Version 2.52.0 [(download here)](https://git-scm.com/install/windows)
- Composer | Version 2.9.1 [(download here)](https://getcomposer.org/download/)
- Node.js | Version 25.5.0 [(download here)](https://nodejs.org/en/download) 

*NOTE: PhpMyAdmin is only needed to interact with the physical database.*

## Local Development
### Setup
Once the source code has been extracted to your desired directory, open a terminal in the project's root and execute the following:

```bash
composer setup
```

This command may take a moment to complete as it installs project dependences, compiles assets, generates environments and keys, as well as run migrations. 

### Seeding 
To seed the database for testing, execute the following *after* running the setup command:
```bash
php artisan db:seed 
```

### Starting the Application
Ensure that laravel Herd's services has been activated on your client. Then, run:
```bash
php artisan serve
```


