<?php

namespace App\Repositories;

use App\Doyen;

class DoyenRepository extends ResourceRepository
{

    public function __construct(Doyen $doyen)
    {
        $this->model = $doyen;
    }

}