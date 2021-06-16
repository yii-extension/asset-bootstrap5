<?php

declare(strict_types=1);

namespace Yii\Extension\Asset\Bootstrap5\Tests;

use Yiisoft\Assets\AssetBundle;

final class AssetTest extends TestCase
{
    /**
     * @return array
     */
    public function registerCdnDataProvider(): array
    {
        return [
            [
                'Css',
                \Yii\Extension\Asset\Bootstrap5\Bootstrap5Asset::class,
            ],
            [
                'Js',
                \Yii\Extension\Asset\Bootstrap5\Bootstrap5Asset::class,
            ],
            [
                'Js',
                \Yii\Extension\Asset\Bootstrap5\Bootstrap5ValidationAsset::class,
            ],
        ];
    }

    /**
     * @dataProvider registerCdnDataProvider
     *
     * @param string $type
     * @param string $asset
     * @param string $depend
     */
    public function testAssetRegister(string $type, string $asset, ?string $depend = null): void
    {
        $bundle = new $asset();

        if ($depend !== null) {
            $depend = new $depend();
        }

        $this->assertEmpty($this->getRegisteredBundles($this->assetManager));

        $this->assetManager->register([$asset]);

        if ($depend !== null && $type === 'Css') {
            $dependUrl = $this->assetPublisher->getPublishedUrl($depend->sourcePath) . '/' . $depend->css[0];
            $this->assertEquals($dependUrl, $this->assetManager->getCssFiles()[$dependUrl][0]);
        } elseif ($type === 'Css') {
            $bundleUrl = $this->assetPublisher->getPublishedUrl($bundle->sourcePath) . '/' . $bundle->css[0];
            $this->assertEquals($bundleUrl, $this->assetManager->getCssFiles()[$bundleUrl][0]);
        }

        if ($depend !== null && $type === 'Js') {
            $dependUrl = $this->assetPublisher->getPublishedUrl($depend->sourcePath) . '/' . $depend->js[0];
            $this->assertEquals($dependUrl, $this->assetManager->getJsFiles()[$dependUrl][0]);
        } elseif ($type === 'Js') {
            $bundleUrl = $this->assetPublisher->getPublishedUrl($bundle->sourcePath) . '/' . $bundle->js[0];
            $this->assertEquals($bundleUrl, $this->assetManager->getJsFiles()[$bundleUrl][0]);
        }

        $this->removeAssets('@assets');
    }
}
