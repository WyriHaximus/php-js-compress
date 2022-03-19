<?php

declare(strict_types=1);

namespace WyriHaximus\JsCompress;

use WyriHaximus\Compress\CompressorInterface;
use WyriHaximus\Compress\ReturnCompressor;
use WyriHaximus\Compress\SmallestResultCompressor;
use WyriHaximus\JsCompress\Compressor\JavaScriptPackerCompressor;
use WyriHaximus\JsCompress\Compressor\JShrinkCompressor;
use WyriHaximus\JsCompress\Compressor\MMMJSCompressor;

use const PHP_VERSION_ID;

final class Factory
{
    public static function construct(): CompressorInterface
    {
        return new MMMJSCompressor();
    }

    public static function constructSmallest(): CompressorInterface
    {
        return new SmallestResultCompressor(
            new MMMJSCompressor(),
            new JavaScriptPackerCompressor(),
            PHP_VERSION_ID < 80000 ? new JShrinkCompressor() : new ReturnCompressor(),
            new ReturnCompressor() // Sometimes no compression can already be the smallest
        );
    }
}
