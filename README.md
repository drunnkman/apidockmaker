Laravel interactive api document generator
===============

[![Latest Stable Version](http://img.shields.io/github/release/jenssegers/laravel-mongodb.svg)](https://packagist.org/packages/jenssegers/mongodb) [![Total Downloads](http://img.shields.io/packagist/dm/jenssegers/mongodb.svg)](https://packagist.org/packages/jenssegers/mongodb) [![Build Status](http://img.shields.io/travis/jenssegers/laravel-mongodb.svg)](https://travis-ci.org/jenssegers/laravel-mongodb) [![Coverage Status](http://img.shields.io/coveralls/jenssegers/laravel-mongodb.svg)](https://coveralls.io/r/jenssegers/laravel-mongodb?branch=master) [![Donate](https://img.shields.io/badge/donate-paypal-blue.svg)](https://www.paypal.me/jenssegers)

An Eloquent model and Query builder with support for MongoDB, using the original Laravel API. *This library extends the original Laravel classes, so it uses exactly the same methods.*

Table of contents
-----------------
* [Installation](#installation)
* [Upgrading](#upgrading)
* [Configuration](#configuration)
* [Troubleshooting](#troubleshooting)
* [Examples](#examples)

Installation
------------

Make sure you have the MongoDB PHP driver installed. You can find installation instructions at http://php.net/manual/en/mongodb.installation.php

**WARNING**: The old mongo PHP driver is not supported anymore in versions >= 3.0.

Installation using composer:

```
composer require jenssegers/mongodb
```

### Laravel version Compatibility

 Laravel  | Package
:---------|:----------
 4.2.x    | 2.0.x
 5.0.x    | 2.1.x
 5.1.x    | 2.2.x or 3.0.x
 5.2.x    | 2.3.x or 3.0.x
 5.3.x    | 3.1.x or 3.2.x
 5.4.x    | 3.2.x
 5.5.x    | 3.3.x
 5.6.x    | 3.4.x

And add the service provider in `config/app.php`:

```php
Jenssegers\Mongodb\MongodbServiceProvider::class,
```

For usage with [Lumen](http://lumen.laravel.com), add the service provider in `bootstrap/app.php`. In this file, you will also need to enable Eloquent. You must however ensure that your call to `$app->withEloquent();` is **below** where you have registered the `MongodbServiceProvider`:

```php
$app->register(Jenssegers\Mongodb\MongodbServiceProvider::class);

$app->withEloquent();
```
 

*From: http://laravel.com/docs/database#query-logging*
