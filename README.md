## Laravel Raja Ongkir API

[![Latest Version](https://img.shields.io/github/release/ncaneldiee/rajaongkir-laravel.svg?style=flat-square)](https://github.com/ncaneldiee/rajaongkir-laravel/releases)
[![Total Download](https://img.shields.io/packagist/dt/ncaneldiee/rajaongkir-laravel.svg?style=flat-square)](https://packagist.org/packages/ncaneldiee/rajaongkir-laravel)
[![Software License](https://img.shields.io/github/license/ncaneldiee/rajaongkir-laravel.svg?style=flat-square)](https://github.com/ncaneldiee/rajaongkir-laravel/blob/master/LICENSE.md)


## Installation

Using composer.

```bash
$ composer require ncaneldiee/rajaongkir-laravel
```

Add service provider to ```config/app.php```.

```php
    ...
    'Ncaneldiee\Rajaongkir\Laravel\RajaongkirServiceProvider',
    ...
```

Add alias to ```config/app.php```.

```php
    ...
    'Rajaongkir\Domestic' => 'Ncaneldiee\Rajaongkir\Laravel\RajaongkirDomesticFacade',
    'Rajaongkir\International' => 'Ncaneldiee\Rajaongkir\Laravel\RajaongkirInternationalFacade',
    ...
```

Publish vendor.

```bash
$ php artisan vendor:publish
```

## Configuration

Set your configuration using environment variable.

```
RAJAONGKIR_ACCOUNT_TYPE=YOUR_ACCOUNT_TYPE
RAJAONGKIR_API_KEY=YOUR_API_KEY
```

## Example

```php
Rajaongkir\Domestic::cost($origin, $destination, $weight, $courier);

Rajaongkir\Domestic::waybill($tracking_number, $courier);
```

Full documentation can be found at the [wiki](http://github.com/ncaneldiee/rajaongkir/wiki).

## License

The MIT License (MIT). Please see [LICENSE](http://github.com/ncaneldiee/rajaongkir-laraavel/blob/master/LICENSE.md) for more information.
