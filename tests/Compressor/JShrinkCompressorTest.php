<?php

declare(strict_types=1);

namespace WyriHaximus\JsCompress\Tests\Compressor;

use WyriHaximus\Compress\CompressorInterface;
use WyriHaximus\Compress\ReturnCompressor;
use WyriHaximus\Compress\TestUtilities\AbstractCompressorTest;
use WyriHaximus\JsCompress\Compressor\JShrinkCompressor;

use const PHP_VERSION_ID;

/**
 * @internal
 */
final class JShrinkCompressorTest extends AbstractCompressorTest
{
    public function testException(): void
    {
        $input  = "var a = '";
        $output = $this->compressor->compress($input);
        self::assertSame($input, $output);
    }

    protected function getCompressor(): CompressorInterface
    {
        return PHP_VERSION_ID < 80000 ? new JShrinkCompressor() : new ReturnCompressor();
    }
}
