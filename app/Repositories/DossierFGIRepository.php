<?php

namespace App\Repositories;

use App\DossierPartenairesFGI;

class DossierFGIRepository extends ResourceRepository
{

    public function __construct(DossierPartenairesFGI $dossierPartenairesFGI)
    {
        $this->model = $dossierPartenairesFGI;
    }

}