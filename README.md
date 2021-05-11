# Composer version reader
This PHP 7 library readers the version number from the `composer.json` file.

## Installation
This library is available through [Packagist](https://packagist.org/packages/codeinc/composer-version-reader)
and can be installed using [Composer](https://getcomposer.org/):

```bash
composer require codeinc/composer-version-reader
```


## Usage
```php
<?php
use CodeInc\ComposerVersionReader\ComposerVersionReader;

echo ComposerVersionReader::readVersion(__DIR__);
// outputs "1.0.0" or NULL if the "version" entry is not set.
```

## License
This library is published under the MIT license (see the [LICENSE](LICENSE) file). 

