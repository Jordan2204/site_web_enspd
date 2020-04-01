<?php

namespace App\Repositories;

use App\PartenaireLabo;

class PartenaireLaboRepository extends ResourceRepository
{

    public function __construct(PartenaireLabo $partenaireLabo)
    {
        $this->model = $partenaireLabo;
 
    }

}