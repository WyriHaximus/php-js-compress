<?php

declare(strict_types=1);

namespace WyriHaximus\JsCompress;

use WyriHaximus\Compress\CompressorInterface;
use WyriHaximus\Compress\ReturnCompressor;
use WyriHaximus\Compress\SmallestResultCompressor;
use WyriHaximus\JsCompress\Compressor\JavaScriptPackerCompressor;
use WyriHaximus\JsCompress\Compressor\JShrinkCompressor;
use WyriHaximus\JsCompress\Compressor\JSMinCompressor;
use WyriHaximus\JsCompress\Compressor\MMMJSCompressor;
use WyriHaximus\JsCompress\Compressor\YUIJSCompressor;

use const PHP_VERSION_ID;
use const WyriHaximus\Constants\Boolean\TRUE_;

final class Factory
{
    public static function construct(): CompressorInterface
    {
        return new MMMJSCompressor();
    }

    /**
     * @param  bool $externalCompressors When set to false only use pure PHP compressors.
     */
    public static function constructSmallest(bool $externalCompressors = TRUE_): CompressorInterface
    {
        return new SmallestResultCompressor(
            new MMMJSCompressor(),
            new JSMinCompressor(),
            new JavaScriptPackerCompressor(),
            PHP_VERSION_ID < 80000 ? new JShrinkCompressor() : new ReturnCompressor(),
            $externalCompressors ? new YUIJSCompressor() : new ReturnCompressor(),
            new ReturnCompressor() // Sometimes no compression can already be the smallest
        );
    }
}
