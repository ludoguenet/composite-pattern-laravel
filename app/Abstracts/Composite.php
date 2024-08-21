<?php

declare(strict_types=1);

namespace App\Abstracts;

use App\Contracts\Component;

abstract class Composite implements Component
{
    protected array $children = [];

    public function add(Component $child): void
    {
        $this->children[] = $child;
    }

    public function getBudget(): int
    {
        $total = 0;

        foreach ($this->children as $child) {
            $total += $child->getBudget();
        }

        return $total;
    }
}
