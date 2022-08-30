<?php

namespace App\Repositories\News;

use App\Components\CommonComponent;
use App\Enums\PublishStatus;
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

    public function getNews($request)
    {
        $newSizeLimit = $this->newListLimit($request);
        $newBuilder = $this->news;
        if (isset($request['search_input'])) {
            $newBuilder = $newBuilder->where(function ($q) use ($request) {
                $q->orWhere($this->escapeLikeSentence('title', $request['search_input']));
            });
        }
        $news = $newBuilder->sortable(['updated_at' => 'desc'])->paginate($newSizeLimit);
        if ($this->checkPaginatorList($news)) {
            Paginator::currentPageResolver(function () {
                return 1;
            });
            $news = $newBuilder->paginate($newSizeLimit);
        }

        return $news;
    }

    public function getById($id)
    {
        return $this->news->where('id', $id)->first();
    }

    public function store($request)
    {
        $data = $request->post();
        $data['publish_status'] = $request->publish_status ? PublishStatus::PUBLISH : PublishStatus::UNPUBLISH;

        if ($request->input('unset_file')) {
            $data['news_file'] = null;
        } elseif ($request->hasFile('news_file')) {
            $file = $request->file('news_file');
            $extension = $file->getClientOriginalExtension();
            $path = CommonComponent::uploadFile('news-file', $file, CommonComponent::uploadFileName($extension));
            if (is_string($path)) {
                $data['file_url'] = $path;
                $data['file_name'] = $request->file('news_file')->getClientOriginalName();
            } else {
                return false;
            }
        }

        return $this->news->create($data);
    }

    public function update($request, $id)
    {
        $data = $request->post();
        $data['publish_status'] = $request->publish_status ? PublishStatus::PUBLISH : PublishStatus::UNPUBLISH;

        if ($request->input('unset_file')) {
            $data['news_file'] = null;
        } elseif ($request->hasFile('news_file')) {
            $file = $request->file('news_file');
            $extension = $file->getClientOriginalExtension();
            $path = CommonComponent::uploadFile('news-file', $file, CommonComponent::uploadFileName($extension));
            if (is_string($path)) {
                $data['file_url'] = $path;
                $data['file_name'] = $request->file('news_file')->getClientOriginalName();
            } else {
                return false;
            }
        }

        return $this->news->find($id)->update($data);
    }

    public function destroy($id)
    {
        $notificationInfo = $this->news->where('id', $id)->first();
        if (! $notificationInfo) {
            return false;
        }

        return $notificationInfo->delete();
    }
}
