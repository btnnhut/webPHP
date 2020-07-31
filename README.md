### BASE LARAVEL 2020

---

### I. Introduction

+ Laravel is a PHP based web Framework.

---

### II. Prereqisites

+ PHP
+ MySQL
+ HTML
+ JavaScript
+ CSS

---

### III. Install

+ PHP version last 7.0 or upper version
+ An OpenSSL extension for PHP
+ A PDO extension for PHP
+ Mbstring extension for PHP
+ Tokenizer extension for PHP
+ XML extension for PHP

---

### IV. BEGIN

+ Create Project

Create Folder pro in htdocs and open cmd

+ #### Install [composer](https://getcomposer.org/)

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e5325b19b381bfd88ce90a5ddb7823406b2a38cff6bb704b0acc289a09c8128d4a8ce2bbafcd1fcbdc38666422fe2806') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

```

+ #### Install [Laravel](https://laravel.com/docs/7.x#installing-laravel)

* Build Composer Create-Project:

```
php composer.phar create-project --prefer-dist laravel/laravel news

```

+ news: name project

Run Project:

```http://localhost/pro/news/public/```

Copy and Edit file ***pro/news/server.php*** to ***pro/news/index.php***

Copy file ***pro/news/public/.htaccess*** to ***pro/news/.htaccess***

* Create one Controller by cmd

	+ Run cmd in ***pro/news/***

```
php artisan make:controller HelloController

```

Or full (Create Function index, create, store, show, edit, update and destroy)

```
php artisan make:controller HelloController --resource

```