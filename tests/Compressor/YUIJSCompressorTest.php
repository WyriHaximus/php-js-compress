<?php

declare(strict_types=1);

namespace WyriHaximus\JsCompress\Tests\Compressor;

use WyriHaximus\Compress\AbstractCompressorTest;
use WyriHaximus\Compress\CompressorInterface;
use WyriHaximus\JsCompress\Compressor\YUIJSCompressor;

/**
 * @internal
 */
final class YUIJSCompressorTest extends AbstractCompressorTest
{
    protected function getCompressor(): CompressorInterface
    {
        return new YUIJSCompressor();
    }
}
