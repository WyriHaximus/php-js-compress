<?php

declare(strict_types=1);

namespace WyriHaximus\JsCompress\Compressor;

use JavaScriptPacker;
use WyriHaximus\Compress\CompressorInterface;

use function is_string;

final class JavaScriptPackerCompressor implements CompressorInterface
{
    public function compress(string $string): string
    {
        /** @psalm-suppress MixedAssignment */
        $result = (new JavaScriptPacker($string))->pack();
        if (is_string($result)) {
            return $result;
        }

        return $string;
    }
}
