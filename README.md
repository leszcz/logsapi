
# LogsApi

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

## Install

Via Composer

``` bash
$ composer require leszcz/logsapi
```

## Usage

```
Add LogsApiServiceProvider to config/app.php (leszcz\logsapi\LogsApiServiceProvider::class)

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
[ico-travis]: https://img.shields.io/travis/leszcz/logsapi/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/leszcz/logsapi.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/leszcz/logsapi.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/leszcz/logsapi.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/leszcz/logsapi
[link-travis]: https://travis-ci.org/leszcz/logsapi
[link-scrutinizer]: https://scrutinizer-ci.com/g/leszcz/logsapi/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/leszcz/logsapi
[link-downloads]: https://packagist.org/packages/leszcz/logsapi
[link-author]: https://github.com/leszcz
[link-contributors]: ../../contributors