<?php declare(strict_types=1);

function toRna(string $dna): string
{
    $map = ['G' => 'C', 'C' => 'G', 'T' => 'A', 'A' => 'U'];

    return implode('', array_map(fn ($nucleotide) => $map[$nucleotide], mb_str_split($dna)));
}
