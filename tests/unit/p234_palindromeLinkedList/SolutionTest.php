<?php

declare(strict_types=1);

namespace serhioli\leetcode\tests\unit\p234_palindromeLinkedList;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use serhioli\leetcode\p234_palindromeLinkedList\ListNode;
use serhioli\leetcode\p234_palindromeLinkedList\Solution;

final class SolutionTest extends TestCase
{
    public function testListNode(): void
    {
        $node = new ListNode();

        $this->assertInstanceOf(ListNode::class, $node);
        $this->assertSame(0, $node->val);
    }

    #[DataProvider('dataProvider')]
    public function testIsSolved(ListNode $head, bool $expectedResult): void
    {
        $solution = new Solution();

        $actualResult = $solution->isPalindrome($head);

        static::assertEquals($expectedResult, $actualResult);
    }

    public static function dataProvider(): array
    {
        return [
            [
                static::buildForSequence([1, 2, 1]),
                true,
            ],
            [
                static::buildForSequence([1, 2, 2, 1]),
                true,
            ],
            [
                static::buildForSequence([1, 2, 3, 1]),
                false,
            ],
            [
                static::buildForSequence([-1, 2, 1]),
                false,
            ],
            [
                static::buildForSequence([1, 0]),
                false,
            ],
        ];
    }

    protected static function buildForSequence(array $seq): ListNode
    {
        $previous = null;
        foreach (array_reverse($seq) as $value) {
            $previous = new ListNode($value, $previous);
        }

        return $previous;
    }
}
