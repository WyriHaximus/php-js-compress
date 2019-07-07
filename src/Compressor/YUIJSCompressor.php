<?php declare(strict_types=1);

namespace WyriHaximus\JsCompress\Compressor;

use WyriHaximus\Compress\CompressorInterface;
use YUI\Compressor as YUICompressor;

final class YUIJSCompressor implements CompressorInterface
{
    /** @var YUICompressor */
    private $yui;

    public function __construct()
    {
        $this->yui = new YUICompressor();
    }

    public function compress(string $string): string
    {
        try {
            return $this->yui->compress($string);
        } catch (\Exception $exception) {
            return $string;
        }
    }
}
