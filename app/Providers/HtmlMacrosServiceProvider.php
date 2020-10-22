<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Collective\Html\FormBuilder;
use Collective\Html\HtmlBuilder;


class HtmlMacrosServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerFormControl();
        $this->registerFormSubmit();
        $this->registerHtmlButtonBack();

    }

    private function registerFormControl()
    {
        FormBuilder::macro('control', function($type, $errors, $nom, $placeholder, $require)
        {
            if (!empty($require)) {
                $require = "*";
            }
            $valeur = \Request::old($nom) ? \Request::old($nom) : null;
            $attributes = ['class' => 'form-control','id' => $nom, 'placeholder' => $placeholder];
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
        });     
    }

    private function registerFormSubmit()
    {
        FormBuilder::macro('button_submit', function($texte)
        {
            return FormBuilder::submit($texte, ['class' => 'btn btn-primary float-right']);
        });     
    }

    private function registerHtmlButtonBack()
    {   
        HtmlBuilder::macro('button_back', function()
        {
            return '<a href="javascript:history.back()" class="btn btn-primary">
                          <i class="fa fa-chevron-circle-left"> Retour</i>  
                    </a>';
        });         
    }

}
