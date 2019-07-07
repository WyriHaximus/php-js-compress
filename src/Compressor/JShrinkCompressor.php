<?php declare(strict_types=1);

namespace WyriHaximus\JsCompress\Compressor;

use JShrink\Minifier;
use WyriHaximus\Compress\CompressorInterface;

final class JShrinkCompressor implements CompressorInterface
{
    public function compress(string $string): string
    {
        try {
            /** @var string $string */
            $string = Minifier::minify($string);

            return $string;
        } catch (\Exception $exception) {
            return $string;
        }
    }
}
