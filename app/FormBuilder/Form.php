<?php

namespace App\FormBuilder;

use App\Abstracts\FormElementComposite;
use App\Contracts\FormElementComponent;

class Form extends FormElementComposite implements FormElementComponent
{
    public function __construct(private string $title)
    {}

    public function render(): string
    {
        $html = '<form><h1>' . $this->title . '</h1>';

        foreach ($this->children as $child) {
            $html .= $child->render();
        }

        $html .= '</form>';

        return $html;
    }
}