<?php

namespace App\Models;

use App\Abstracts\Composite;

class Developer extends Composite
{
    public const DEVELOPER_SALARY = 70000;

    public function getBudget(): int
    {
        $salary = self::DEVELOPER_SALARY;

        return $salary + parent::getBudget();
    }
}
