<?php

namespace App\Repositories\JobBroad;

use App\Http\Controllers\BaseController;
use App\Models\JobBroad;
use App\Repositories\JobBroad\JobBroadInterface;
use Illuminate\Support\Facades\Auth;

class JobBroadRepository extends BaseController implements JobBroadInterface
{
    private JobBroad $jobBroad;

    public function __construct(JobBroad $jobBroad)
    {
        $this->jobBroad = $jobBroad;
    }

    public function get()
    {
        return $this->jobBroad->latest()->select('id', 'name as label')
            ->orderBy('id')
            ->get();
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
