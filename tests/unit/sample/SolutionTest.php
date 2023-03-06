<?php

declare(strict_types=1);

namespace serhioli\leetcode\tests\unit\sample;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use serhioli\leetcode\sample\Solution;

final class SolutionTest extends TestCase
{
    #[DataProvider('dataProvider')]
    public function testIsSolved(int $value): void
    {
        self::assertEquals(
            $value,
            (new Solution())->test($value),
        );
    }

    public static function dataProvider(): array
    {
        return [
            [1],
        ];
    }
}
