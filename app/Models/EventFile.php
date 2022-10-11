<?php

namespace App\Models;

use App\Components\CommonComponent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * @property int $id
 * @property int $event_id
 * @property string $file_name
 * @property string $file_url
 * @property bool $type
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class EventFile extends Model
{
    use HasFactory, SoftDeletes, Sortable;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['event_id', 'file_name', 'file_url', 'type', 'created_at', 'updated_at', 'deleted_at'];

    protected $appends = ['path', 'full_url'];

    public function getPathAttribute()
    {
        return 'events/'.$this->event_id.'/'.$this->file_url;
    }

    public function getFullUrlAttribute()
    {
        return CommonComponent::fullUrl('events/'.$this->event_id.'/'.$this->file_url);
    }
}
