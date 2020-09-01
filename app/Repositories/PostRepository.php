<?php

namespace App\Repositories;

use App\Post;

class PostRepository extends ResourceRepository
{

    public function __construct(Post $post)
    {
        $this->model = $post;
    }

}