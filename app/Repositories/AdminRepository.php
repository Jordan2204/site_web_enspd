<?php

namespace App\Repositories;

use App\Admin;

class AdminRepository extends ResourceRepository
{

    public function __construct(Admin $admin)
    {
        $this->model = $admin;
    }

}