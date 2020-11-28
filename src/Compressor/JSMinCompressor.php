<?php

declare(strict_types=1);

namespace WyriHaximus\JsCompress\Compressor;

use JSMin;
use JSMinException;
use WyriHaximus\Compress\CompressorInterface;

use function is_string;

final class JSMinCompressor implements CompressorInterface
{
    public function compress(string $string): string
    {
        try {
            /** @psalm-suppress MixedAssignment */
            $result = JSMin::minify($string);
            if (is_string($result)) {
                return $result;
            }

            return $string;
        } catch (JSMinException $exception) {
            return $string;
        }
    }
}
