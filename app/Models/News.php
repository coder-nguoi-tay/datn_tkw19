<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $url
 * @property string $file_url
 * @property string $file_name
 * @property string $publish_start_datetime
 * @property string $publish_end_datetime
 * @property bool $publish_status
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class News extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    use HasFactory, SoftDeletes, Sortable;

    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['title', 'content', 'url', 'file_url', 'file_name', 'publish_start_datetime', 'publish_end_datetime', 'publish_status', 'created_at', 'updated_at', 'deleted_at'];

    protected $appends = ['publish_start_date_format', 'publish_end_date_format'];

    public function getPublishStartDateFormatAttribute()
    {
        return Carbon::parse($this->publish_start_datetime)->format('Y/m/d H:i');
    }

    public function getPublishEndDateFormatAttribute()
    {
        return Carbon::parse($this->publish_end_datetime)->format('Y/m/d H:i');
    }
}
