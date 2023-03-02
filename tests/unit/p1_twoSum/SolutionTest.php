<?php

declare(strict_types=1);

namespace serhioli\leetcode\tests\unit\p1_twoSum;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use serhioli\leetcode\p1_twoSum\Solution;

final class SolutionTest extends TestCase
{
    #[DataProvider('dataProvider')]
    public function testIsSolved(array $nums, int $target, ?array $expectedResult): void
    {
        $solution = new Solution();

        $actualResult = $solution->twoSum($nums, $target);

        if (null === $expectedResult) {
            static::assertNull($actualResult);

            return;
        }

        static::assertIsArray($actualResult);
        static::assertEqualsCanonicalizing($expectedResult, $actualResult);
    }

    public static function dataProvider(): array
    {
        return [
            [
                [2, 7, 11, 15],
                9,
                [0, 1],
            ],
            [
                [3, 2, 4],
                6,
                [1, 2],
            ],
            [
                [3, 3],
                6,
                [0, 1],
            ],
            [
                [1, 1, 1],
                1000,
                null,
            ],
        ];
    }
}
