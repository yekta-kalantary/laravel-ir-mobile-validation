## Installation

Require this package with composer.

```shell
composer require yekta-kalantary/laravel-ir-mobile-validation
```

## Validation Rules

| Rules 				| Examples
| ---					| --- |
| ir_mobile				| 00989123456789, +989123456789, 989123456789, 09123456789, 9123456789
| ir_mobile_code_zero	| 00989123456789
| ir_mobile_code_plus	| +989123456789
| ir_mobile_code		| 989123456789
| ir_mobile_zero		| 09123456789
| ir_mobile_no_zero		| 9123456789

## Usage

```php
$request->validate([
    'mobile_number' => 'required|ir_mobile_code_zero',
]);
```
