<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * @property int $id
 * @property int $event_id
 * @property int $user_id
 * @property string $chat_content
 * @property bool $show_flag
 * @property string $send_datetime
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class EventPublicChat extends Model
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
    protected $fillable = ['event_id', 'user_id', 'chat_content', 'show_flag', 'send_datetime', 'created_at', 'updated_at', 'deleted_at'];
}
