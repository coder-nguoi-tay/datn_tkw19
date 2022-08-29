<?php

namespace App\Repositories\News;

use App\Http\Controllers\BaseController;
use App\Models\News;
use App\Repositories\News\NewsInterface;
use Illuminate\Support\Facades\Auth;

class NewsRepository extends BaseController implements NewsInterface
{
    private News $news;

    public function __construct(News $news)
    {
        $this->news = $news;
    }

    public function get($request)
    {
        // TODO: Implement get() method.
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
    }

    public function store($request)
    {
        // TODO: Implement store() method.
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}
