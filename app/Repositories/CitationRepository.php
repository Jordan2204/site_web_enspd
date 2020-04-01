<?php

namespace App\Repositories;

use App\Citation;

class CitationRepository extends ResourceRepository
{

    public function __construct(Citation $citation)
    {
        $this->model = $citation;
    }

}