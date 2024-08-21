<?php

use App\Models\Developer;
use App\Models\Intern;
use App\Models\ProjectManager;
use Illuminate\Support\Facades\Route;

Route::get('/budget', function () {
    $pm = new ProjectManager();

    $d1 = new Developer();
    $d2 = new Developer();

    $d1->add(new Intern());
    $d2->add(new Intern());

    $pm->add($d1);
    $pm->add($d2);

    $total = $pm->getBudget();

    return view('budget', compact('total'));
});
