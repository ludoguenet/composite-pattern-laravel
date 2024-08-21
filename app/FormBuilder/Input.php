<?php

namespace App\FormBuilder;

use App\Contracts\FormElementComponent;

class Input implements FormElementComponent
{
    public function __construct(private string $type, private string $name)
    {}

    public function render(): string
    {
        return '<input type=' . $this->type . ' name=' . $this->name . ' />';
    }
}