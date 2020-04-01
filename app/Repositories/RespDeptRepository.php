<?php

namespace App\Repositories;

use App\Respdept;

class RespDeptRepository extends ResourceRepository
{

    public function __construct(Respdept $respdept)
    {
        $this->model = $respdept;
    }

}