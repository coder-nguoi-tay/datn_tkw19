<?php

namespace App\Repositories\Tag;

use App\Http\Controllers\BaseController;
use App\Models\Tag;
use App\Repositories\Tag\TagInterface;
use Illuminate\Support\Facades\Auth;

class TagRepository extends BaseController implements TagInterface
{
    private Tag $tag;

    public function __construct(Tag $tag)
    {
        $this->tag = $tag;
    }

    public function get()
    {
        return $this->tag->select(['id as value', 'name'])->get();
    }

    public function searchTag($request)
    {
        return $this->tag->whereNotIn('name', $request->tags ?? [])->select(['id as value', 'name'])->get();
    }
}
