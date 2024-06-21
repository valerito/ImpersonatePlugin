# This plugin is used to impersonate your filament panel users

[![Latest Version on Packagist](https://img.shields.io/packagist/v/valerito/impersonateplugin.svg?style=flat-square)](https://packagist.org/packages/valerito/impersonateplugin)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/valerito/impersonateplugin/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/valerito/impersonateplugin/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/valerito/impersonateplugin/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/valerito/impersonateplugin/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/valerito/impersonateplugin.svg?style=flat-square)](https://packagist.org/packages/valerito/impersonateplugin)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require valerito/impersonateplugin
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="impersonateplugin-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="impersonateplugin-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="impersonateplugin-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$impersonatePlugin = new Valerito\ImpersonatePlugin();
echo $impersonatePlugin->echoPhrase('Hello, Valerito!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Samuel Valero](https://github.com/valerito)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
