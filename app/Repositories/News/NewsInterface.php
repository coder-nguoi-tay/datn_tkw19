<?php

namespace App\Repositories\News;

interface NewsInterface
{
    public function getNews($request);

    public function getById($id);

    public function store($request);

    public function update($request, $id);

    public function destroy($id);
}
