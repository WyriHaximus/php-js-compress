<?php

declare(strict_types=1);

namespace WyriHaximus\JsCompress\Tests\Compressor;

use WyriHaximus\Compress\AbstractCompressorTest;
use WyriHaximus\Compress\CompressorInterface;
use WyriHaximus\JsCompress\Compressor\JavaScriptPackerCompressor;

/**
 * @internal
 */
final class JavaScriptPackerCompressorTest extends AbstractCompressorTest
{
    protected function getCompressor(): CompressorInterface
    {
        return new JavaScriptPackerCompressor();
    }
}
