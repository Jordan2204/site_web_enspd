<?php

namespace App\Repositories;

use App\Respcom;

class RespcomRepository extends ResourceRepository
{

    public function __construct(RespCom $respCom)
    {
        $this->model = $respCom;
    }

}