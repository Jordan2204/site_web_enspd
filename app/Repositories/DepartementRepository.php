<?php

namespace App\Repositories;

use App\Departement;

class DepartementRepository extends ResourceRepository
{

    public function __construct(Departement $departement)
    {
        $this->model = $departement;
 
    }

}