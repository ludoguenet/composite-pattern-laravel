<?php

namespace App\Models;

use App\Abstracts\Composite;
use Illuminate\Notifications\Notifiable;

class ProjectManager extends Composite
{
    public const MANAGER_SALARY = 100000;

    public function getBudget(): int
    {
        $salary = self::MANAGER_SALARY;

        return $salary + parent::getBudget();
    }
}
