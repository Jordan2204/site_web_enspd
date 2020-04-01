<?php

namespace App\Repositories;

use App\MembresLabo;

class MembresLaboRepository extends ResourceRepository
{

    public function __construct(MembresLabo $membresLabo)
    {
        $this->model = $membresLabo;
 
    }

}