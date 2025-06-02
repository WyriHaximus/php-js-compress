<?php

declare(strict_types=1);

namespace WyriHaximus\JsCompress\Compressor;

use JavaScriptPacker;
use WyriHaximus\Compress\CompressorInterface;

final class JavaScriptPackerCompressor implements CompressorInterface
{
    public function compress(string $string): string
    {
        /** @phpstan-ignore return.type */
        return (new JavaScriptPacker($string))->pack();
    }
}
