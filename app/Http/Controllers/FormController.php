<?php

namespace App\Http\Controllers;

use App\FormBuilder\Form;
use App\FormBuilder\Input;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\FormBuilder\Fieldset;

class FormController extends Controller
{
    public function __invoke(Request $request): View
    {
        $form = new Form('Mon super formulaire');

        $input1 = new Input('text', 'name');

        $input2 = new Input('email', 'email');

        $fieldset = new Fieldset('Inscription');

        
        $fieldset->__addchild($input1);

        $fieldset->__addchild($input2);

        $form->__addchild($fieldset);


        $form = $form->render();

        return view('form', compact('form'));
    }
    
}