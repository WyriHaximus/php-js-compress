<?php

declare(strict_types=1);

namespace WyriHaximus\JsCompress\Tests\Compressor;

use PHPUnit\Framework\Attributes\Test;
use WyriHaximus\Compress\CompressorInterface;
use WyriHaximus\Compress\TestUtilities\AbstractCompressorTest;
use WyriHaximus\JsCompress\Compressor\JShrinkCompressor;

final class JShrinkCompressorTest extends AbstractCompressorTest
{
    #[Test]
    public function exception(): void
    {
        $input  = "var a = '";
        $output = $this->compressor->compress($input);
        self::assertSame($input, $output);
    }

    protected function getCompressor(): CompressorInterface
    {
        return new JShrinkCompressor();
    }
}
