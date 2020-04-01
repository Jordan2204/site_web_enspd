<?php

namespace App\Repositories;

use App\AdministrationCentrale;

class AdminCentRepository extends ResourceRepository
{

    public function __construct(AdministrationCentrale $adminCent)
    {
        $this->model = $adminCent;
    }

}