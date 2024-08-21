<?php

namespace App\Models;

use App\Abstracts\Composite;
use App\Contracts\Component;

class Intern implements Component
{
    public const INTERN_SALARY = 20000;

    public function getBudget(): int
    {
        return self::INTERN_SALARY;
    }
}
