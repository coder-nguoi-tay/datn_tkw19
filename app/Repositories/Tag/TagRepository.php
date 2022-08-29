<?php

namespace App\Repositories\Tag;

use App\Models\Tag;
use App\Http\Controllers\BaseController;
use App\Repositories\Tag\TagInterface;
use Illuminate\Support\Facades\Auth;

class TagRepository extends BaseController implements TagInterface
{
    private Tag $tag;
    public function __construct(Tag $tag)
    {
        $this->tag = $tag;
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
