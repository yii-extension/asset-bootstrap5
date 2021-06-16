<?php

declare(strict_types=1);

namespace Yii\Extension\Asset\Bootstrap5;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

final class Bootstrap5Asset extends AssetBundle
{
    public ?string $basePath = '@assets';

    public ?string $baseUrl = '@assetsUrl';

    public ?string $sourcePath = '@npm/bootstrap/dist';

    public array $css = [
        'css/bootstrap.css',
    ];

    public array $js = [
        'js/bootstrap.bundle.js',
    ];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only(
                '**css/bootstrap.css',
                '**css/bootstrap.css.map',
                '**js/bootstrap.bundle.js',
                '**js/bootstrap.bundle.js.map',
            ),
        ];
    }
}
