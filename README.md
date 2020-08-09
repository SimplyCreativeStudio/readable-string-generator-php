# Readable String Generator

Small library that generates a random human readable string.



#### Examples

- WASABO
- LALOGO
- WOXIVA
- XORUKO
- MODU
- XUSU



## Installation

This package uses [composer](https://getcomposer.org/) so you can just add `nordpeak/readable-string-generator  as a dependency to your `composer.json` file or execute the following command:

```php
composer require nordpeak/readable-string-generator
```



## Usage

Very straightforward.

``` php
use Nordpeak\ReadableStringGenerator;

// default behaviour
ReadableStringGenerator::generate(); // => "WASABO"

// change length 
ReadableStringGenerator::generate(["length" => "4"]); // => "MODU"
```



## Options

The following options are available:

```php
ReadableStringGenerator::generate([
  "length" => "8" // default = 6
]);
```

