<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * @property int $id
 * @property int $event_id
 * @property string $chat_content
 * @property int $order_num
 * @property string $achiever_reward_content
 * @property string $achiever_reward_memo
 * @property int $reward_amount
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class EventReward extends Model
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
    protected $fillable = ['event_id', 'chat_content', 'order_num', 'achiever_reward_content', 'achiever_reward_memo', 'reward_amount', 'created_at', 'updated_at', 'deleted_at'];
}
