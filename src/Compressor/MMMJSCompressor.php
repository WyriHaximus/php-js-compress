<?php declare(strict_types=1);

namespace WyriHaximus\JsCompress\Compressor;

use MatthiasMullie\Minify\JS;
use WyriHaximus\Compress\CompressorInterface;

final class MMMJSCompressor implements CompressorInterface
{
    public function compress(string $string): string
    {
        /** @psalm-suppress TooManyArguments */
        return (new JS($string))->minify();
    }
}
