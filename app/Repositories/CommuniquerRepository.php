<?php

namespace App\Repositories;

use App\Communiquer;

class CommuniquerRepository extends ResourceRepository
{

    public function __construct(Communiquer $communiquer)
    {
        $this->model = $communiquer;
    }

}