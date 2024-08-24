<?php

namespace App\Http\Controllers;

use App\FormBuilder\Fieldset;
use App\FormBuilder\Form;
use App\FormBuilder\Input;
use Illuminate\View\View;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function __invoke(Request $request): View
    {
        $form = new Form('Mon super formulaire');

        $input1 = new Input('text', 'name');
        $input2 = new Input('email', 'email');

        $fieldset = new Fieldset('Inscription');

        $fieldset->addChild($input1);
        $fieldset->addChild($input2);

        $form->addChild($fieldset);

        $form = $form->render();

        return view('form', compact('form'));
    }
}
