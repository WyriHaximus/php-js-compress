<?php

declare(strict_types=1);

namespace WyriHaximus\JsCompress;

use WyriHaximus\Compress\CompressorInterface;
use WyriHaximus\Compress\ReturnCompressor;
use WyriHaximus\Compress\SmallestResultCompressor;
use WyriHaximus\JsCompress\Compressor\MMMJSCompressor;
use WyriHaximus\JsCompress\Compressor\WikiMediaMinifyCompressor;

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
            new WikiMediaMinifyCompressor(),
            new ReturnCompressor(), // Sometimes no compression can already be the smallest
        );
    }
}
