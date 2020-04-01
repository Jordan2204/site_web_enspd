<?php

namespace App\Repositories;

use App\Respecoledoct;

class RespEcoleDoctRepository extends ResourceRepository
{

    public function __construct(Respecoledoct $respecoledoct)
    {
        $this->model = $respecoledoct;
    }

}