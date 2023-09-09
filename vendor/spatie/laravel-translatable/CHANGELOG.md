# Changelog

All notable changes to `laravel-translatable` will be documented in this file

## 6.5.2 - 2023-06-20

### What's Changed

- Bump dependabot/fetch-metadata from 1.4.0 to 1.5.1 by @dependabot in https://github.com/spatie/laravel-translatable/pull/394
- Convert static methods to scopes by @gdebrauwer in https://github.com/spatie/laravel-translatable/pull/396

**Full Changelog**: https://github.com/spatie/laravel-translatable/compare/6.5.1...6.5.2

## 6.5.1 - 2023-05-06

### What's Changed

- Bump dependabot/fetch-metadata from 1.3.6 to 1.4.0 by @dependabot in https://github.com/spatie/laravel-translatable/pull/389
- Add getFallbackLocale method by @gdebrauwer in https://github.com/spatie/laravel-translatable/pull/391

**Full Changelog**: https://github.com/spatie/laravel-translatable/compare/6.5.0...6.5.1

## 6.5.0 - 2023-04-20

### What's Changed

- update customize-the-toarray-method.md by @moham96 in https://github.com/spatie/laravel-translatable/pull/387
- Add macro for `$this->translations()` in factories by @bram-pkg in https://github.com/spatie/laravel-translatable/pull/382

### New Contributors

- @moham96 made their first contribution in https://github.com/spatie/laravel-translatable/pull/387
- @bram-pkg made their first contribution in https://github.com/spatie/laravel-translatable/pull/382

**Full Changelog**: https://github.com/spatie/laravel-translatable/compare/6.4.0...6.5.0

## 6.4.0 - 2023-03-19

### What's Changed

- Bump dependabot/fetch-metadata from 1.3.5 to 1.3.6 by @dependabot in https://github.com/spatie/laravel-translatable/pull/376
- Fix badge with `tests` status in `README.md` by @gomzyakov in https://github.com/spatie/laravel-translatable/pull/377
- Update README.md by @alirezasalehizadeh in https://github.com/spatie/laravel-translatable/pull/381
- Enable fallback locale on a per model basis by @yoeriboven in https://github.com/spatie/laravel-translatable/pull/380

### New Contributors

- @gomzyakov made their first contribution in https://github.com/spatie/laravel-translatable/pull/377
- @alirezasalehizadeh made their first contribution in https://github.com/spatie/laravel-translatable/pull/381
- @yoeriboven made their first contribution in https://github.com/spatie/laravel-translatable/pull/380

**Full Changelog**: https://github.com/spatie/laravel-translatable/compare/6.3.0...6.4.0

## 6.3.0 - 2023-01-14

### What's Changed

- Laravel 10.x support by @erikn69 in https://github.com/spatie/laravel-translatable/pull/374

### New Contributors

- @erikn69 made their first contribution in https://github.com/spatie/laravel-translatable/pull/374

**Full Changelog**: https://github.com/spatie/laravel-translatable/compare/6.2.0...6.3.0

## 6.2.0 - 2022-12-23

### What's Changed

- Add Dependabot Automation by @patinthehat in https://github.com/spatie/laravel-translatable/pull/366
- Add PHP 8.2 Support by @patinthehat in https://github.com/spatie/laravel-translatable/pull/367
- Bump actions/checkout from 2 to 3 by @dependabot in https://github.com/spatie/laravel-translatable/pull/368
- Added whereLocale and whereLocales methods by @ahmetbarut in https://github.com/spatie/laravel-translatable/pull/370

### New Contributors

- @dependabot made their first contribution in https://github.com/spatie/laravel-translatable/pull/368

**Full Changelog**: https://github.com/spatie/laravel-translatable/compare/6.1.0...6.2.0

## 6.1.0 - 2022-10-21

### What's Changed

- PHPUnit to Pest Converter by @freekmurze in https://github.com/spatie/laravel-translatable/pull/335
- Fix typo in "Getting and setting translations" by @sami-cha in https://github.com/spatie/laravel-translatable/pull/346
- Fix typo in advanced usage docs directory name by @greatislander in https://github.com/spatie/laravel-translatable/pull/347
- Fixed example for forgetAllTranslations() method. by @odeland in https://github.com/spatie/laravel-translatable/pull/348
- added locales method by @ahmetbarut in https://github.com/spatie/laravel-translatable/pull/361

### New Contributors

- @sami-cha made their first contribution in https://github.com/spatie/laravel-translatable/pull/346
- @greatislander made their first contribution in https://github.com/spatie/laravel-translatable/pull/347
- @odeland made their first contribution in https://github.com/spatie/laravel-translatable/pull/348
- @ahmetbarut made their first contribution in https://github.com/spatie/laravel-translatable/pull/361

**Full Changelog**: https://github.com/spatie/laravel-translatable/compare/6.0.0...6.1.0

## 6.0.0 - 2022-03-07

- improved fallback customisations
- modernized code base
- drop support for Laravel 8

## 5.2.0 - 2022-01-13

- support Laravel 9

## 5.0.3 - 2021-10-04

- solve the string value issue in filterTranslations method (#300)

## 5.0.2 - 2021-09-28

- specify locales in get translations method (#299)

## 5.0.1 - 2021-07-15

- fix return types of getTranslation (#286)

## 5.0.0 - 2021-03-26

- require PHP 8+
- convert syntax to PHP 8
- drop support for PHP 7.x
- drop support for Laravel 6.x
- implement `spatie/laravel-package-tools`

## 4.6.0 - 2020-11-19

- add support for PHP 8.0 (#241)
- drop support for Laravel 5.8 (#241)

## 4.5.2 - 2020-10-22

- revert #235

## 4.5.1 - 2020-10-22

- use string casting for translatable columns (#235)

## 4.5.0 2020-10-03

- add replaceTranslations method (#231)

## 4.4.3 - 2020-10-2

- rename `withLocale` to `usingLocale`

## 4.4.2 - 2020-10-02

- elegant syntax update (#229)

## 4.4.1 - 2020-09-06

- add support for Laravel 8 (#226)

## 4.4.0 - 2020-07-09

- make possible to set multiple translations on mutator model field with array (#216)

## 4.3.2 - 2020-04-30

- fix `forgetTranslation` & `forgetAllTranslations` on fields with mutator (#205)

## 4.3.1 - 2020-03-07

- Lumen fix (#201)

## 4.3.0 - 2020-03-02

- add support for Laravel 7

## 4.2.2 - 2020-01-20

- open up for non-model objects (#186)

## 4.2.1 - 2019-10-03

- add third param to translate method (#177)

## 4.2.0 - 2019-09-04

- make compatible with Laravel 6

## 4.1.4 - 2019-08-28

- re-added the `translatable.fallback_local` config which overrule `app.fallback_local` (see https://github.com/spatie/laravel-translatable/issues/170)

## 4.1.3 - 2019-06-16

- improve dependencies

## 4.1.2 - 2019-06-06

- allow false and true values in translations

## 4.1.1 - 2019-02-27

- fix service provider error

## 4.1.0 - 2019-02-27

- drop support for Laravel 5.7 and below
- drop support for PHP 7.1 and below

## 4.0.0 - 2019-02-27

- `app.fallback_local` will now be used (see #148)

## 3.1.3 - 2019-02-27

- add support for Laravel 5.8

## 3.1.2 - 2019-01-05

- add `hasTranslation`

## 3.1.1 - 2018-12-18

- allow 0 to be used as a translation value

## 3.1.0 - 2018-11-29

- allow `getTranslations` to return other things than strings

## 3.0.1 - 2018-09-18

- fix regarding empty locales

## 3.0.0 - 2018-09-16

- added `translations` accessor
- dropped support for PHP 7.0

## 2.2.1 - 2018-08-24

- add support for Laravel 5.7

## 2.2.0 - 2018-03-09

- made it possible to get all translations in one go

## 2.1.5 - 2018-02-28

- better handling of `null` values

## 2.1.4 - 2018-02-08

- add support for L5.6

## 2.1.3 - 2018-01-24

- make locale handling more flexible

## 2.1.2 - 2017-12-24

- fix for using translations within translations

## 2.1.1 - 2017-12-20

- fix event `key` attribute
- fix support for mutators

## 2.1.0 - 2017-09-21

- added support for setting a translation directly through the property

## 2.0.0 - 2017-08-30

- added support for Laravel 5.5, dropped support for all older versions
- rename config file from `laravel-translatable` to `translatable`

## 1.3.0 - 2017-06-12

- add `forgetAllTranslations`

## 1.2.2 - 2016-01-27

- improve support for fallback locale

## 1.2.1 - 2016-01-23

- improve compatibility for Laravel 5.4

## 1.2.0 - 2016-01-23

- add compatibility for Laravel 5.4

## 1.1.2 - 2016-10-02

- made `isTranslatableAttribute` public

## 1.1.1 - 2016-08-24

- add L5.3 compatibility

## 1.1.0 - 2016-05-02

- added support for a fallback locale

## 1.0.0 - 2016-04-10

- initial release
