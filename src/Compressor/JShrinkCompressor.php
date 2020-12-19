<?php

declare(strict_types=1);

namespace WyriHaximus\JsCompress\Compressor;

use JShrink\Minifier;
use Throwable;
use WyriHaximus\Compress\CompressorInterface;

use function is_bool;

final class JShrinkCompressor implements CompressorInterface
{
    public function compress(string $string): string
    {
        try {
            $result = Minifier::minify($string);
            if (is_bool($result)) {
                return $string;
            }

            return $result;
        } catch (Throwable $exception) { /** @phpstan-ignore-line */
            return $string;
        }
    }
}
