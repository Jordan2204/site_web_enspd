
<?php

namespace App\Services\Html;

use Collective\Html\HtmlBuilder as CollectiveHtmlBuilder;

class HtmlBuilder extends CollectiveHtmlBuilder
{

    public function button_back()
    {
        return '<a href="javascript:history.back()" class="btn btn-primary">
                          <i class="fa fa-chevron-circle-left"> Retour</i>  
                </a>';
    }       

}