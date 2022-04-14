<?php declare(strict_types=1);

function from(DateTimeInterface $date): DateTimeInterface
{
    return $date->modify(sprintf("%d sec", 10**9));
}
