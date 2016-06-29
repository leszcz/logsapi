
# LogsApi

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

## Install

Via Composer

``` bash
$ composer require leszcz/logsapi
```

## Usage

```
POST /api/logs TOKEN from Controller - sha1(HGAPI_.actualdate)
script return raw laravel.log file.
GET /api/get_token return actual token for POST (made for tests)

```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email :author_email instead of using the issue tracker.

## Credits

- [leszcz][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/leszcz/logsapi.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/leszcz/logsapi.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/leszcz/logsapi
[link-downloads]: https://packagist.org/packages/leszcz/logsapi
[link-author]: https://github.com/leszcz
[link-contributors]: ../../contributors
