<?php

declare(strict_types=1);

namespace serhioli\leetcode\tests\unit\p9_palindromeNumber;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use serhioli\leetcode\p9_palindromeNumber\Solution;

final class SolutionTest extends TestCase
{
    #[DataProvider('dataProvider')]
    public function testIsSolved(int $x, bool $expectedResult): void
    {
        $solution = new Solution();

        $actualResult = $solution->isPalindrome($x);

        static::assertSame($expectedResult, $actualResult);
    }

    public static function dataProvider(): array
    {
        return [
            [121, true],
            [-121, false],
            [728, false],
            [12, false],
        ];
    }
}
