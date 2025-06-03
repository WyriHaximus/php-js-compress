<?php

declare(strict_types=1);

namespace WyriHaximus\JsCompress\Compressor;

use Wikimedia\Minify\JavaScriptMinifier;
use WyriHaximus\Compress\CompressorInterface;

final class WikiMediaMinifyCompressor implements CompressorInterface
{
    public function compress(string $string): string
    {
        return JavaScriptMinifier::minify($string);
    }
}
