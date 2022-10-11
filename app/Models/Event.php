<?php

namespace App\Models;

use App\Components\CommonComponent;
use App\Enums\PublishStatus;
use Carbon\Carbon;
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
        'reservation_date' => 'datetime:Y/m/d',
        'publish_start_datetime' => 'datetime:Y/m/d H:i',
    ];

    protected function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }

    protected $appends = ['is_publish', 'waiting_publish', 'image_full_url', 'remaining_day', 'remaining_hour', 'remaining_minute', 'path'];

    public function getIsPublishAttribute()
    {
        return $this->publish_flag == PublishStatus::PUBLISH && $this->publish_start_datetime < Carbon::now();
    }

    public function getWaitingPublishAttribute()
    {
        return $this->publish_flag == PublishStatus::PUBLISH && $this->publish_start_datetime > Carbon::now();
    }

    public function getImageFullUrlAttribute()
    {
        return CommonComponent::fullUrl('events/'.$this->id.'/'.$this->image_url);
    }

    public function getPathAttribute()
    {
        return 'events/'.$this->id.'/'.$this->image_url;
    }

    public function getRemainingDayAttribute()
    {
        $totalMinute = Carbon::now()->diffInMinutes(Carbon::parse($this->publish_start_datetime));
        $day = floor($totalMinute / (24 * 60));

        return $day;
    }

    public function getRemainingHourAttribute()
    {
        $totalMinute = Carbon::now()->diffInMinutes(Carbon::parse($this->publish_start_datetime));
        $day = floor($totalMinute / (24 * 60));
        $totalMinute -= $day * 24 * 60;
        $hour = floor($totalMinute / 60);

        return $hour;
    }

    public function getRemainingMinuteAttribute()
    {
        $totalMinute = Carbon::now()->diffInMinutes(Carbon::parse($this->publish_start_datetime));
        $day = floor($totalMinute / (24 * 60));
        $totalMinute -= $day * 24 * 60;
        $hour = floor($totalMinute / 60);
        $totalMinute -= $hour * 60;

        return $totalMinute;
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'created_user_id');
    }

    public function eventCondition()
    {
        return $this->hasOne(EventCondition::class, 'event_id', 'id');
    }

    public function eventTags()
    {
        return $this->hasMany(EventTag::class, 'event_id', 'id');
    }

    public function eventRewards()
    {
        return $this->hasMany(EventReward::class, 'event_id', 'id');
    }

    public function eventFiles()
    {
        return $this->hasMany(EventFile::class, 'event_id', 'id');
    }
}
