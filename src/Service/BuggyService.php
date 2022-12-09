<?php

declare(strict_types=1);

namespace App\Service;

class BuggyService
{
     /** @var array<string, int> */
    private array $coupons;

    public function __construct()
    {
    }

    public function __invoke(): void
    {
        $this->coupons['hello'] = 42;
    }
}
