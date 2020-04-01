<?php

namespace App\Repositories;

use App\News;

class NewsRepository extends ResourceRepository
{

    public function __construct(News $news)
    {
        $this->model = $news;
 
    }

}