<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * @property int $id
 * @property string $name
 * @property string $detail
 * @property string $achievement_conditions
 * @property int $reward_amount
 * @property bool $entry_type
 * @property int $entry_fee
 * @property mixed $events_area
 * @property bool $apply_method
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
    protected $fillable = ['name', 'detail', 'achievement_conditions', 'reward_amount', 'entry_type', 'entry_fee', 'events_area', 'apply_method', 'event_organizer', 'publish_start_datetime', 'publish_end_datetime', 'created_at', 'updated_at', 'deleted_at'];

    protected $casts = [
        'events_area' => 'array',
    ];

    protected function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }
}
