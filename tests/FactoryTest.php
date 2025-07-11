<?php

declare(strict_types=1);

namespace WyriHaximus\JsCompress\Tests;

use WyriHaximus\JsCompress\Factory;
use WyriHaximus\TestUtilities\TestCase;

final class FactoryTest extends TestCase
{
    public function testConstruct(): void
    {
        $compressor = Factory::construct();

        self::assertSame(
            'alert("hoi")',
            $compressor->compress(
                'alert("hoi");',
            ),
        );
    }

    public function testConstructSmallestDefault(): void
    {
        $compressor = Factory::constructSmallest();

        self::assertSame(
            'alert("hoi")',
            $compressor->compress(
                'alert("hoi");',
            ),
        );
    }
}
