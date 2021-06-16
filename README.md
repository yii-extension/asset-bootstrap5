<p align="center">
    <a href="https://github.com/yii-extension" target="_blank">
        <img src="https://lh3.googleusercontent.com/ehSTPnXqrkk0M3U-UPCjC0fty9K6lgykK2WOUA2nUHp8gIkRjeTN8z8SABlkvcvR-9PIrboxIvPGujPgWebLQeHHgX7yLUoxFSduiZrTog6WoZLiAvqcTR1QTPVRmns2tYjACpp7EQ=w2400" height="100px">
    </a>
    <h1 align="center">Asset Bootstrap5 for Yii3.</h1>
    <br>
</p>

[![Total Downloads](https://poser.pugx.org/yii-extension/asset-bootstrap5/downloads.png)](https://packagist.org/packages/yii-extension/asset-bootstrap5)
[![Build Status](https://github.com/yii-extension/asset-bootstrap5/workflows/build/badge.svg)](https://github.com/yii-extension/asset-bootstrap5/actions?query=workflow%3Abuild)
[![static analysis](https://github.com/yii-extension/asset-bootstrap5/workflows/static%20analysis/badge.svg)](https://github.com/yii-extension/asset-bootstrap5/actions?query=workflow%3A%22static+analysis%22)
[![type-coverage](https://shepherd.dev/github/yii-extension/asset-bootstrap5/coverage.svg)](https://shepherd.dev/github/yii-extension/asset-bootstrap5)

## Installation

```shell
composer require asset-bootstrap5
```

## Usage
If you want to add the asset to the entire application, you must add it in layout `main.php`, in case of using it only in one view you must add it to it. 

### Asset Bootstrap5:
```php
<?php

declare(strict_types=1);

use Yii\Extension\Asset\Bootstrap5\Bootstrap5Asset;

/**
 * @var AssetManager $assetManager
 * @var WebView $this
 */

/* Register assets in view */
$assetManager->register([Bootstrap5Asset::class]);

$this->addCssFiles($assetManager->getCssFiles());
$this->addJsFiles($assetManager->getJsFiles());
?>
```

### Cdn Asset Bootstrap5:
```php
<?php

declare(strict_types=1);

use Yii\Extension\Asset\Bootstrap5\Bootstrap5CdnAsset;

/**
 * @var AssetManager $assetManager
 * @var WebView $this
 */

/* Register assets in view */
$assetManager->register([Bootstrap5CdnAsset::class]);

$this->addCssFiles($assetManager->getCssFiles());
$this->addJsFiles($assetManager->getJsFiles());
?>
```

### Validation Bootstrap5 `javaScript` for disabling form submissions if there are invalid fields:
```php
<?php

declare(strict_types=1);

use Yii\Extension\Asset\Bootstrap5\Bootstrap5Asset;
use Yii\Extension\Asset\Bootstrap5\Bootstrap5ValidationAsset;

/**
 * @var AssetManager $assetManager
 * @var WebView $this
 */

/* Register assets in view */
$assetManager->register([Bootstrap5Asset::class, Bootstrap5ValidationAsset::class]);

$this->addCssFiles($assetManager->getCssFiles());
$this->addJsFiles($assetManager->getJsFiles());
?>
```

### Unit testing

The package is tested with [PHPUnit](https://phpunit.de/). To run tests:

```shell
./vendor/bin/phpunit
```

## Static analysis

The code is statically analyzed with [Psalm](https://psalm.dev/docs). To run static analysis:

```shell
./vendor/bin/psalm
```

### Support the project

[![Open Collective](https://img.shields.io/badge/Open%20Collective-sponsor-7eadf1?logo=open%20collective&logoColor=7eadf1&labelColor=555555)](https://opencollective.com/yiisoft)

### License

The Asset-Bootstrap5 for Yii Packages is free software. It is released under the terms of the BSD License.
Please see [`LICENSE`](./LICENSE.md) for more information.

Maintained by [Yii Extension](https://github.com/yii-extension).
