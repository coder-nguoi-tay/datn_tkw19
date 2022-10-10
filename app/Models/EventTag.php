<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * @property int $id
 * @property int $event_id
 * @property int $tag_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class EventTag extends Model
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
    protected $fillable = ['event_id', 'tag_id', 'created_at', 'updated_at', 'deleted_at'];

    public function tag()
    {
        return $this->hasOne(Tag::class, 'id', 'tag_id');
    }
}
