<?php declare(strict_types=1);

namespace WyriHaximus\JsCompress\Compressor;

use WyriHaximus\Compress\CompressorInterface;

final class JavaScriptPackerCompressor implements CompressorInterface
{
    public function compress(string $string): string
    {
        return (string)(new \JavaScriptPacker($string))->pack();
    }
}
