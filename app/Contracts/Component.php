<?php

declare(strict_types=1);

namespace App\Contracts;

interface Component
{
    public function getBudget(): int;
}
