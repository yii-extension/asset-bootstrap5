<?php

declare(strict_types=1);

namespace Yii\Extension\Asset\Bootstrap5;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

final class Bootstrap5IconsAsset extends AssetBundle
{
    public ?string $basePath = '@assets';
    public ?string $baseUrl = '@assetsUrl';
    public ?string $sourcePath = '@npm/bootstrap-icons';

    public array $css = [
        'font/bootstrap-icons.css',
    ];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only(
                '**/font/bootstrap-icons.css',
                '**/font/fonts/*',
                '**/bootstrap-icons.svg',
            ),
        ];
    }
}
