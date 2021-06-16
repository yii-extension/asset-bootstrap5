<?php

declare(strict_types=1);

namespace Yii\Extension\Asset\Bootstrap5;

use Yiisoft\Assets\AssetBundle;

final class Bootstrap5CdnAsset extends AssetBundle
{
    public bool $cdn = true;

    public array $css = [
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css',
    ];

    public array $cssOptions = [
        'integrity' => 'sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x',
        'crossorigin' => 'anonymous',
    ];

    public array $js = [
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js',
    ];

    public array $jsOptions = [
        'integrity' => 'sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4',
        'crossorigin' => 'anonymous',
    ];
}
