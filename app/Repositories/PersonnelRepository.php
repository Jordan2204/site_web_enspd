<?php

namespace App\Repositories;

use App\Personnel;

class PersonnelRepository extends ResourceRepository
{

    public function __construct(Personnel $personnel)
    {
        $this->model = $personnel;
    }

}