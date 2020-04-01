<?php

namespace App\Repositories;

use App\FormEnseigChoixBref;

class InfosFGIRepository extends ResourceRepository
{

    public function __construct(FormEnseigChoixBref $infoFGI)
    {
        $this->model = $infoFGI;
    }

}