<?php declare(strict_types=1);

function distance(string $strandA, string $strandB) : int
{
    $diffs = 0; $length = mb_strlen($strandA, 'UTF-8');

    if ($length !== mb_strlen($strandB, 'UTF-8')) {
        throw new \InvalidArgumentException('DNA strands must be of equal length.');
    }

    for ($i = 0; $i < $length; $i++) { 
        if ($strandA[$i] !== $strandB[$i]) {
            $diffs++;
        }
    }

    return $diffs;
}
