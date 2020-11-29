<?php

declare(strict_types=1);

namespace WyriHaximus\JsCompress\Compressor;

use Patchwork\JSqueeze;
use WyriHaximus\Compress\CompressorInterface;

use function is_string;

final class JSqueezeCompressor implements CompressorInterface
{
    public function compress(string $string): string
    {
        /** @psalm-suppress MixedAssignment */
        $result = (new JSqueeze())->squeeze($string);
        if (is_string($result)) {
            return $result;
        }

        return $string;
    }
}
