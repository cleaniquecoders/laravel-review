
[![Build Status](https://travis-ci.org/cleaniquecoders/laravel-review.svg?branch=master)](https://travis-ci.org/cleaniquecoders/laravel-review) [![Latest Stable Version](https://poser.pugx.org/cleaniquecoders/laravel-review/v/stable)](https://packagist.org/packages/cleaniquecoders/laravel-review) [![Total Downloads](https://poser.pugx.org/cleaniquecoders/laravel-review/downloads)](https://packagist.org/packages/cleaniquecoders/laravel-review) [![License](https://poser.pugx.org/cleaniquecoders/laravel-review/license)](https://packagist.org/packages/cleaniquecoders/laravel-review)

## About Your Package

We always want to review something in order to get approval to proceed. 

This package enabled developers to write their own logic to handle:

1. Request for review
2. Have multiple review approval / rejection
3. Enable developers to design the workflow of the review
	- on approved review from reviewer A, proceed review to B and C
	- on rejected review from reviewer A, return back to requestor
4. Enabled audit trail
5. Each review will have stage number - review #1, #2, #3, etc.
6. Enable optional review
7. Default Policy
	- [ ] Owner can update
		- [ ] If review is not locked
		- [ ] If review is not send yet for review
	- [ ] Reviewer can update
		- [ ] If current review status under review mode
		- [ ] If current logged in user is the reviewer of the review

## Installation

1. In order to install `cleaniquecoders/laravel-review` in your Laravel project, just run the *composer require* command from your terminal:

```
$ composer require cleaniquecoders/laravel-review
```

2. Then in your `config/app.php` add the following to the providers array:

```php
CleaniqueCoders\LaravelReview\LaravelReviewServiceProvider::class,
```

3. In the same `config/app.php` add the following to the aliases array:

```php
'LaravelReview' => CleaniqueCoders\LaravelReview\LaravelReviewFacade::class,
```

## Usage

## Test

To run the test, type `vendor/bin/phpunit` in your terminal.

To have codes coverage, please ensure to install PHP XDebug then run the following command:

```
$ vendor/bin/phpunit -v --coverage-text --colors=never --stderr
```

## Contributing

Thank you for considering contributing to the `cleaniquecoders/laravel-review`!

### Bug Reports

To encourage active collaboration, it is strongly encourages pull requests, not just bug reports. "Bug reports" may also be sent in the form of a pull request containing a failing test.

However, if you file a bug report, your issue should contain a title and a clear description of the issue. You should also include as much relevant information as possible and a code sample that demonstrates the issue. The goal of a bug report is to make it easy for yourself - and others - to replicate the bug and develop a fix.

Remember, bug reports are created in the hope that others with the same problem will be able to collaborate with you on solving it. Do not expect that the bug report will automatically see any activity or that others will jump to fix it. Creating a bug report serves to help yourself and others start on the path of fixing the problem.

## Coding Style

`cleaniquecoders/laravel-review` follows the PSR-2 coding standard and the PSR-4 autoloading standard. 

You may use PHP CS Fixer in order to keep things standardised. PHP CS Fixer configuration can be found in `.php_cs`.

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).