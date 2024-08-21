<?php

use App\FormBuilder\Form;
use App\Http\Controllers\FormController;
use App\Models\Developer;
use App\Models\Intern;
use App\Models\ProjectManager;
use Illuminate\Support\Facades\Route;

Route::get('/form', FormController::class);
