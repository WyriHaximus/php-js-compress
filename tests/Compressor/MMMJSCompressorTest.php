<?php declare(strict_types=1);

namespace WyriHaximus\JsCompress\Tests\Compressor;

use WyriHaximus\Compress\AbstractCompressorTest;
use WyriHaximus\Compress\CompressorInterface;
use WyriHaximus\JsCompress\Compressor\MMMJSCompressor;

/**
 * @internal
 */
final class MMMJSCompressorTest extends AbstractCompressorTest
{
    protected function getCompressor(): CompressorInterface
    {
        return new MMMJSCompressor();
    }
}
