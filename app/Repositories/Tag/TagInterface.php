<?php

namespace App\Repositories\Tag;

interface TagInterface
{
    public function get();

    public function searchTag($request);
}
