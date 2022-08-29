<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $url
 * @property string $file_url
 * @property string $file_name
 * @property string $publish_start_datetime
 * @property string $publish_end_datetime
 * @property boolean $publish_status
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
}
