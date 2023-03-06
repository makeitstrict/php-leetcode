<?php

declare(strict_types=1);

namespace serhioli\leetcode\tests\unit\sample;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    #[DataProvider('dataProvider')]
    public function testIsSolved(int $value): void
    {
        self::assertEquals(1, $value);
    }

    public static function dataProvider(): array
    {
        return [
            1,
        ];
    }
}
