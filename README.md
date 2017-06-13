# String Helpers
Helper functions for string manipulation

## Function List

### classname

Get the class name without namespace.

```php
classname('App\\Model\\User'); // User
```

Can also be used to convert strings to correct namespaces by passing `true` as the second argument.

```php
classname('app_Model-Exception StringException', true); // App\Model\Exception\StringException
```

### e

Escapes HTML

```php
e('<script>console.log(\'XSS attack\');</script>'); // &lt;script&gt;console.log(&#039;XSS attack&#039;);&lt;/script&gt;
```

### kebab_case

Converts a string to kebab case (this-is-kebab-case).

Mainly converts spaces and underscores, while leaving backslashes and url symbols intact (/, ?, =, &, +, # etc)

```php
kebab_case('some String/with_many-symbols\\to convert?=some&other+thing'); // some-string/with-many-symbols\to-convert?=some&other+thing
```

### snake_case

Converts a string to snake case (this_is_snake_case).

Mainly converts spaces and hyphens, while leaving backslashes and url symbols intact (/, ?, =, &, +, # etc)

```php
snake_case('some String/with_many-symbols\\to convert?=some&other+thing'); // some_string/with_many_symbols\to_convert?=some&other+thing
```

### str_after

Returns the string after a search string has been matched.

```php
str_after('\\', 'App\\Model\\User'); // Model\User
```

### str_after_last

Returns the string after a last search string has been matched.

```php
str_after_last('\\', 'App\\Model\\User'); // User
```

### str_contains

Determine if a given string contains a given substring, or array of possible matches.

```php
str_contains('\\', 'App\\Model\\User'); // true

str_contains('/', 'App\\Model\\User'); // false

str_contains(['\\', /'], 'App\\Model\\User'); // true
```

### str_ends_with

Determine if a given string ends with a given substring.

```php
str_ends_with('App\\Test\\SomeTestCase', 'TestCase'); // true
```

### studly_case

Convert a string to studly caps case.

```php
studly_case('some String with_many-symbols'); // SomeStringWithManySymbols
```

### title_case

Convert a string to title case.

```php
title_case('some String with_many-symbols'); // Some String With_Many-Symbols
```

## License
MIT

## Author
&copy; 2017 Luke Watts

https://luke-watts.com

