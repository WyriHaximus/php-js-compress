<?php

declare(strict_types=1);

namespace WyriHaximus\JsCompress\Tests\Compressor;

use WyriHaximus\Compress\CompressorInterface;
use WyriHaximus\Compress\TestUtilities\AbstractCompressorTest;
use WyriHaximus\JsCompress\Compressor\WikiMediaMinifyCompressor;

final class WikiMediaMinifyCompressorTest extends AbstractCompressorTest
{
    protected function getCompressor(): CompressorInterface
    {
        return new WikiMediaMinifyCompressor();
    }
}
