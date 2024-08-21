<?php

declare(strict_types=1);

namespace App\Contracts;

interface FormElementComponent
{
    public function render(): string;
}
