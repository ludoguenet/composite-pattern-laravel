<?php

declare(strict_types=1);

namespace App\Abstracts;

use App\Contracts\ComponentContract;

abstract class CompositeComponent implements ComponentContract
{
    public $children = [];

    public function addChild(ComponentContract $child)
    {
        $this->children[] = $child;
    }
}
