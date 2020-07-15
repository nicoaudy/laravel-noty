# Laravel flash message wrapper for izitoast

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/noty.svg?style=flat-square)](https://packagist.org/packages/spatie/noty)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/spatie/noty/run-tests?label=tests)](https://github.com/spatie/noty/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/noty.svg?style=flat-square)](https://packagist.org/packages/spatie/noty)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require nicoaudy/package-noty-laravel
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="Nicoaudy\Noty\NotyServiceProvider"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
noty('Hello World', 'blue')
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Credits

-   [Nico Audy](https://github.com/NicoAudy)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
