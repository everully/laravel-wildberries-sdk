# Laravel Wildberries SDK
Under the hook this package use [everully/php-wildberries-sdk](https://github.com/everully/php-wildberries-sdk) to provide a simple way to interact with Wildberries API.

## Requirements
- Laravel 8.0 or later.
- PHP 8.2 or later.


## Installation
Install via composer:
```bash
composer require everully/laravel-wildberries-sdk
````

You can publish the config file with:
```bash
php artisan vendor:publish --tag="wildberries-config"
````

Ensure that you have updated your application `.env` with credentials from [Wildberries](https://seller.wildberries.ru/supplier-settings/access-to-api) i.e.

```dotenv
#.env file

WILDBERRIES_TOKEN=
WILDBERRIES_SANDBOX=
```

# Usage
You can use `everully/php-wildberries-sdk` functionality directly:
```php
/** @var \Everully\PhpWildberriesSdk\WildberriesApi $wildberriesContent */
$wildberriesContent = WildberriesApi::content();
$wildberriesContent->content()->cards()->get($data);
```

You can set up api token and sandbox mode in the config file `config/wildberries.php`:
```php
/** @var \Everully\PhpWildberriesSdk\WildberriesApi $wildberriesContent */
$token = 'your-wildberries-token';

$wildberriesContent = WildberriesApi::setToken($token)
    ->content()
    ->cards()
    ->get($data);
```

More about all WildberriesApi methods see here: [everully/php-wildberries-sdk](https://github.com/everully/php-wildberries-sdk)

# Testing
```bash
composer test
````

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Antonov Anton](https://github.com/everully)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
