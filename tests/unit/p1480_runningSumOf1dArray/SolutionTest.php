<?php

declare(strict_types=1);

namespace serhioli\leetcode\tests\unit\p1480_runningSumOf1dArray;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use serhioli\leetcode\p1480_runningSumOf1dArray\Solution;

final class SolutionTest extends TestCase
{
    #[DataProvider('dataProvider')]
    public function testIsSolved(array $nums, array $expectedResult): void
    {
        $solution = new Solution();

        $actualResult = $solution->runningSum($nums);

        static::assertSameSize($nums, $actualResult);
        static::assertEquals($expectedResult, $actualResult);
    }

    public static function dataProvider(): array
    {
        return [
            [
                [1, 2, 3, 4],
                [1, 3, 6, 10],
            ],
            [
                [1, 1, 1, 1, 1],
                [1, 2, 3, 4, 5],
            ],
        ];
    }
}
