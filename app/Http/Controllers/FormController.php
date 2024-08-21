<?php

namespace App\Http\Controllers;

use App\FormBuilder\Form;
use App\FormBuilder\Input;
use Illuminate\View\View;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function __invoke(Request $request): View
    {
        $form = new Form('mon super formulaire');

        $input1 = new Input('text', 'name');
        $input2 = new Input('email', 'email');
    
        $form->add($input1);
        $form->add($input2);
    
        $form = $form->render();

        return view('form', compact('form'));
    }
}
