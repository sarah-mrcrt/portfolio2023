# Portfolio2023

## Table of contents
* [Built With](#built-with)
* [Getting Started](#getting-started)
* [Authors](#authors)

## Built With

* [Laravel](https://laravel.com/) - PHP framework

## Getting Started
### Server configuration

Install dependencies.

```
npm install
composer install
```

Start the server.

```
php artisan serve
```

### Client configuration

Compiling Assets.

```
npm run watch
```

### DataBase configuration

Running migrations & seedings.

```shell
$ php artisan migrate
$ php artisan migrate --seed
```

If inserting the data doesn't work.

```shell
$ composer dump-autoload 
$ php artisan migrate:fresh
$ php artisan migrate --seed
```

Open [http://localhost:8000](http://localhost:8000) or [http://127.0.0.1:8000/](http://127.0.0.1:8000/) to view it in the browser.


## Authors

* **Sarah Mauriaucourt** - *Webdesigner & back-end developer* - [sarah-mrcrt](https://github.com/sarah-mrcrt)