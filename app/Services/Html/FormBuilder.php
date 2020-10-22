<?php

namespace App\Services\Html;

use Collective\Html\FormBuilder as CollectiveFormbuilder;
use Request;

class FormBuilder extends CollectiveFormbuilder
{

    public function control($type, $errors, $nom, $placeholder,$require)
    {
        if (!empty($require)) {
                $require = "*";
        }
        $valeur = \Request::old($nom) ? \Request::old($nom) : null;
        $attributes = ['class' => 'form-control', 'placeholder' => $placeholder];
        return sprintf('
            <div class="form-group %s">
                <label for="$nom">'.$placeholder.'<span style="color: red;"> '.$require.'</span></label>
                %s
                %s
            </div>',
            $errors->has($nom) ? 'has-error' : '',
            call_user_func_array(['Form', $type], [$nom, $valeur, $attributes]),
            $errors->first($nom, '<small class="help-block" style="color: red;">:message</small>')
        );
    }   

    public function button_submit($texte)
    {
        return parent::submit($texte, ['class' => 'btn btn-info pull-right']);
    }       

}