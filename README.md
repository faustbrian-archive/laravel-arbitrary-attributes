**You can help the author become a full-time open-source maintainer by [sponsoring him on GitHub](https://github.com/sponsors/faustbrian).**

---

# Arbitrary Attributes for Laravel Eloquent

[![PHP](https://badgen.net/packagist/php/faustbrian/laravel-arbitrary-attributes)](https://packagist.org/packages/faustbrian/laravel-arbitrary-attributes)
[![Latest Version](https://badgen.net/packagist/v/faustbrian/laravel-arbitrary-attributes)](https://packagist.org/packages/faustbrian/laravel-arbitrary-attributes)

## Installation

```bash
composer require faustbrian/laravel-arbitrary-attributes
```

## Usage

### Model

```php
<?php

use Faust\ArbitraryAttributes\HasArbitraryAttributes;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasArbitraryAttributes;
}
```

### Attributes

```php
$user = User::create([ ... ]);

// Get the value of "key"
$user->getArbitraryAttributes()->get('key');

// Set the "key" value to "value"
$user->getArbitraryAttributes()->set('key', 'value');

// Forget the value of "key"
$user->getArbitraryAttributes()->forget('key');

// Count how many keys there are
$user->getArbitraryAttributes()->count();

// Commit any changes to the database.
$user->getArbitraryAttributes()->commit();
```

## Testing

```bash
composer test
```

## License

This is an open-sourced software licensed under the [AGPL-3.0-or-later](LICENSE).
