<?php

namespace App\Repositories;

use App\Media;

class MediaRepository extends ResourceRepository
{

    public function __construct(Media $media)
    {
        $this->model = $media;
    }

}