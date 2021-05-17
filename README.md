<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## How to start developing

1. Install Docker Engine and Docker Compose.
2. Add an alias in your terminal enviroment: `alias sail='bash vendor/bin/sail'`
3. Start all the required containers in detached mode: `sail up -d`
4. Now go to `http://localhost` in your browser.

[Instructions for MacOS](https://laravel.com/docs/8.x/installation#getting-started-on-macos)

[Instructions for Windows](https://laravel.com/docs/8.x/installation#getting-started-on-windows)

## Executing Commands

### Artisan Commands

Just change the word `php` for `sail`
```bash
# Without sail
php artisan <command>

# With sail.
sail artisan <command>
```

### PHP Commands

```bash
sail php --version

sail php script.php
```

### Composer Commands

```bash
sail composer require laravel/sanctum
```

[More information about sail](https://laravel.com/docs/8.x/sail)
