<?php

declare(strict_types=1);

namespace WyriHaximus\JsCompress\Tests;

use PHPUnit\Framework\Attributes\Test;
use WyriHaximus\JsCompress\Factory;
use WyriHaximus\TestUtilities\TestCase;

final class FactoryTest extends TestCase
{
    #[Test]
    public function construct(): void
    {
        $compressor = Factory::construct();

        self::assertSame(
            'alert("hoi")',
            $compressor->compress(
                'alert("hoi");',
            ),
        );
    }

    #[Test]
    public function constructSmallestDefault(): void
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
