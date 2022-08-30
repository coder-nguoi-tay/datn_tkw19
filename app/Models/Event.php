<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * @property int $id
 * @property string $event_name
 * @property string $event_detail
 * @property string $achievement_conditions
 * @property int $first_achiever_reward
 * @property int $second_achiever_reward
 * @property int $third_achiever_reward
 * @property int $reward_amount
 * @property int $entry_fee
 * @property string $apply_method
 * @property string $event_organizer
 * @property string $publish_start_datetime
 * @property string $publish_end_datetime
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Event extends Model
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
    protected $fillable = ['event_name', 'event_detail', 'achievement_conditions', 'first_achiever_reward', 'second_achiever_reward', 'third_achiever_reward', 'reward_amount', 'entry_fee', 'apply_method', 'event_organizer', 'publish_start_datetime', 'publish_end_datetime', 'created_at', 'updated_at', 'deleted_at'];
}
