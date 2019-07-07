<?php declare(strict_types=1);

namespace WyriHaximus\JsCompress\Compressor;

use Patchwork\JSqueeze;
use WyriHaximus\Compress\CompressorInterface;

final class JSqueezeCompressor implements CompressorInterface
{
    public function compress(string $string): string
    {
        return (string)(new JSqueeze())->squeeze($string);
    }
}
