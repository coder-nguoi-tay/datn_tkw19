<?php

namespace App\Repositories\Category;

use App\Http\Controllers\BaseController;
use App\Models\Category;
use App\Repositories\Category\CategoryInterface;
use Illuminate\Support\Facades\Auth;

class CategoryRepository extends BaseController implements CategoryInterface
{
    private Category $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function getOption()
    {
        return $this->category->latest()->select(['category_name as label', 'id as value'])->get();
    }
}
