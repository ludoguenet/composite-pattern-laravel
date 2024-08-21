<?php

declare(strict_types=1);

namespace App\Abstracts;

use App\Contracts\FormElementComponent;

abstract class FormElementComposite implements FormElementComponent
{
    protected array $children = [];

    public function add(FormElementComponent $child): void
    {
        $this->children[] = $child;
    }

    public function render(): string
    {
        $html = '';

        foreach ($this->children as $child) {
            $$html += $child->render();
        }

        return $html;
    }
}
