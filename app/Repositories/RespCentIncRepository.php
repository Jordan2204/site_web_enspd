<?php

namespace App\Repositories;

use App\Respcentinc;

class RespCentIncRepository extends ResourceRepository
{

    public function __construct(RespCentInc $respcentinc)
    {
        $this->model = $respcentinc;
    }

}