<?php declare(strict_types=1);

namespace WyriHaximus\JsCompress\Compressor;

use WyriHaximus\Compress\CompressorInterface;

final class JSMinCompressor implements CompressorInterface
{
    public function compress(string $string): string
    {
        try {
            return (string)\JSMin::minify($string);
        } catch (\JSMinException $exception) {
            return $string;
        }
    }
}
