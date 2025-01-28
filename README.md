
# Laravel Enum Package

[![Latest Version](https://img.shields.io/github/v/release/omaradel-tech/enum)](https://github.com/omaradel-tech/enum/releases)
[![License](https://img.shields.io/github/license/omaradel-tech/enum)](https://github.com/omaradel-tech/enum/blob/main/LICENSE)

A Laravel package that provides an easy and efficient way to work with enums in PHP, enhancing code readability and maintainability.

## Features

- **Enum Definition**: Define enums using a straightforward syntax.
- **Value Retrieval**: Retrieve enum values seamlessly.
- **Key Retrieval**: Access enum keys with ease.
- **Array Conversion**: Convert enums to arrays for flexible usage.
- **Validation Rules**: Integrate enum validation rules within Laravel's validation system.
- **Localization Support**: Support for translating enum values using Laravel's localization features.

## Installation

Install the package via Composer:

```bash
composer require omaradel-tech/enum
```

## Usage

### Defining an Enum

Create a new enum by extending the `Enum` class:

```php
use OmarAdel\Enum\Enum;

class UserRole extends Enum
{
    const ADMIN = 'admin';
    const EDITOR = 'editor';
    const VIEWER = 'viewer';

    public static $langPath = 'enum::user_roles';
}
```

### Retrieving Enum Values

Access the value of an enum:

```php
$adminRole = UserRole::ADMIN; // 'admin'
```

### Retrieving Enum Keys

Get the key associated with a specific value:

```php
$key = UserRole::ADMIN()->getKey(); // 'ADMIN'
```

### Converting Enum to Array

Convert the enum to an associative array:

```php
$array = UserRole::toArray();
/*
[
    'ADMIN' => 'admin',
    'EDITOR' => 'editor',
    'VIEWER' => 'viewer',
]
*/
```

### Validation

Use the enum in Laravel's validation rules:

```php
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

public function store(Request $request)
{
    $request->validate([
        'role' => ['required', Rule::in(UserRole::values())],
    ]);

    // ...
}
```

### Localization

To localize enum values, add translations in your `resources/lang` files:

**resources/lang/vendor/enum/en/user_roles.php:**

```php
return [
    'admin' => 'Administrator',
    'editor' => 'Editor',
    'viewer' => 'Viewer',
];
```

Then, retrieve the localized value:

```php
$translated = UserRole::getLabel(UserRole::ADMIN); // 'Administrator'
```

### To publish the translations files:

```php
php artisan vendor:publish --tag=enum-translations
```

### Predefined Classes:

1- BaseUserEnum Class:

```php
use OmarAdel\Enum\Enum;

class BaseUserEnum extends Enum
{
    const ADMIN = 'Admin';
    const USER = 'User';
}
```

2- BaseStatusEnum Class:

```php
use OmarAdel\Enum\Enum;

class BaseStatusEnum extends Enum
{
    const DRAFT = 'Draft';
    const PENDING = 'Pending';
    const PUBLISH = 'Published';
}
```

3- BaseUserStatusEnum Class:

```php
use OmarAdel\Enum\Enum;

class BaseUserStatusEnum extends Enum
{
     const ACTIVE = 'Active';
    const IN_ACTIVE = 'In-Active';
}
```
## Contributing

Contributions are welcome! Please submit a pull request or open an issue to discuss improvements or features.

## License

This package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
