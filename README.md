# SparklineBundle

`SparklineBundle` eases the use of the Davaxi/Sparkline php library in your Symfony application by
providing Twig extensions and PHP objects to do the heavy lifting. The bundle uses the 
[Sparkline libarary](https://github.com/davaxi/Sparkline).

## Documentation

## Contributing

See [CONTRIBUTING](CONTRIBUTING.md) file.


## License

SparklineBundle is released under the MIT License. See the bundled [LICENSE](LICENSE) file for details.

## Installation

Installation
============

Make sure Composer is installed globally, as explained in the
[installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Applications that use Symfony Flex
----------------------------------

Open a command console, enter your project directory and execute:

```console
$ composer require oncology-support/sparkline-bundle
```

Applications that don't use Symfony Flex
----------------------------------------

### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require oncology-support/sparkline-bundle
```

### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
    OncologySupport\Sparkline\OncologySupportSparklineBundle::class => ['all' => true],
];
```