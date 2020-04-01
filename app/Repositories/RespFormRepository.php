<?php

namespace App\Repositories;

use App\Respform;

class RespFormRepository extends ResourceRepository
{

    public function __construct(Respform $respform)
    {
        $this->model = $respform;
    }

}