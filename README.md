[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Tests][ico-tests]][link-tests]
[![Total Downloads][ico-downloads]][link-downloads]

# Copernica Rest API Client for Laravel

This package incorporates the [Copernica Rest API Client](https://github.com/123lens/copernica-rest-api-client)

## Installation

```bash
composer require 123lens/laravel-copernica-rest-api-client
```

## Configuration
Add your Copernica Access Token to the `.env` file
```
COPERNICA_ACCESS_TOKEN=YOUR-API-TOKEN
```

\
You can optionally publish the config file with:
```php 
php artisan vendor:publish --provider="Budgetlens\LaravelCopernicaApi\ServiceProvider" --tag="config"`
```


## Usage

```php
$databases = Copernica::database()->list();
ddd($databases);
```

* [Full documentation for the Copernica Rest API Client](https://github.com/123lens/copernica-rest-api-client)

## Testing

``` bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/budgetlens/laravel-copernica-rest-api-client.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-tests]: https://github.com/123lens/laravel-copernica-rest-api-client/actions/workflows/tests.yml/badge.svg
[ico-downloads]: https://img.shields.io/packagist/dt/budgetlens/laravel-copernica-rest-api-client.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/budgetlens/laravel-copernica-rest-api-client
[link-tests]: https://github.com/123lens/laravel-copernica-rest-api-client/actions/workflows/tests.yml?query=workflow%3Atests
[link-downloads]: https://packagist.org/packages/budgetlens/laravel-copernica-rest-api-client
