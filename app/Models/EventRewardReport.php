<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * @property int $id
 * @property int $event_id
 * @property int $event_reward_id
 * @property int $event_application_id
 * @property string $memo_content
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class EventRewardReport extends Model
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
    protected $fillable = ['event_id', 'event_reward_id', 'event_application_id', 'memo_content', 'created_at', 'updated_at', 'deleted_at'];
}
