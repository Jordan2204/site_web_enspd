<?php

namespace App\Repositories;

use App\FormationsDoctorales;

class FormationsDoctoralesRepository extends ResourceRepository
{

    public function __construct(FormationsDoctorales $formationsDoctorales)
    {
        $this->model = $formationsDoctorales;
    }

}