<?php

namespace App\Repositories;

use App\Labo;

class LaboRepository extends ResourceRepository
{

    public function __construct(Labo $labo)
    {
        $this->model = $labo;
 
    }

}