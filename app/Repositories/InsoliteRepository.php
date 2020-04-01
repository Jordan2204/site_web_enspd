<?php

namespace App\Repositories;

use App\Insolite;

class InsoliteRepository extends ResourceRepository
{

    public function __construct(Insolite $insolite)
    {
        $this->model = $insolite;
    }

}