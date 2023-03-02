<?php

declare(strict_types=1);

namespace serhioli\leetcode\p1480_runningSumOf1dArray;

class Solution
{
    /**
     * @param int[] $nums
     *
     * @return int[]
     */
    public function runningSum(array $nums): array
    {
        $runningSum = 0;

        return array_map(
            static function (int $value) use (&$runningSum): int {
                $runningSum = $runningSum + $value;

                return $value + ($runningSum - $value);
            },
            $nums
        );
    }
}
