<?php

declare(strict_types=1);

namespace WyriHaximus\JsCompress\Tests;

use WyriHaximus\JsCompress\Factory;
use WyriHaximus\TestUtilities\TestCase;

/**
 * @internal
 */
final class FactoryTest extends TestCase
{
    public function testConstruct(): void
    {
        $compressor = Factory::construct();

        self::assertSame(
            'alert("hoi")',
            $compressor->compress(
                'alert("hoi");'
            )
        );
    }

    public function testConstructSmallestDefault(): void
    {
        $compressor = Factory::constructSmallest();

        self::assertSame(
            'alert("hoi")',
            $compressor->compress(
                'alert("hoi");'
            )
        );
    }

    public function testConstructSmallestNoExternal(): void
    {
        $compressor = Factory::constructSmallest(false);

        self::assertSame(
            'alert("hoi")',
            $compressor->compress(
                'alert("hoi");'
            )
        );
    }

    public function testConstructSmallestExternal(): void
    {
        $compressor = Factory::constructSmallest(true);

        self::assertSame(
            'alert("hoi")',
            $compressor->compress(
                'alert("hoi");'
            )
        );
    }
}
