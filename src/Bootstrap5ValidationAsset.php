<?php

declare(strict_types=1);

namespace Yii\Extension\Asset\Bootstrap5;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

final class Bootstrap5ValidationAsset extends AssetBundle
{
    public ?string $basePath = '@assets';

    public ?string $baseUrl = '@assetsUrl';

    public ?string $sourcePath = '@assetBootstrap5/storage/assets';

    public array $js = [
        'js/bootstrap5Validation.js',
    ];

    public array $depends = [
        Bootstrap5Asset::class,
    ];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only(
                '**/js/bootstrap5Validation.js',
            ),
        ];
    }
}
