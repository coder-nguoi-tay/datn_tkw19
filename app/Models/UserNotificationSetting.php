<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * @property int $id
 * @property int $user_id
 * @property string $notcie_email
 * @property bool $deals_notification_flag
 * @property bool $publish_chat_notification_flag
 * @property bool $participant_chat_notification_flag
 * @property bool $event_join_notification_flag
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class UserNotificationSetting extends Model
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
    protected $fillable = ['user_id', 'notcie_email', 'deals_notification_flag', 'publish_chat_notification_flag', 'participant_chat_notification_flag', 'event_join_notification_flag', 'created_at', 'updated_at', 'deleted_at'];
}
