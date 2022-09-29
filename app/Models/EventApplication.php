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
 * @property bool $application_status
 * @property string $application_content
 * @property string $application_feedback_content
 * @property string $application_datetime
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class EventApplication extends Model
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
    protected $fillable = ['event_id', 'user_id', 'application_status', 'application_content', 'application_feedback_content', 'application_datetime', 'created_at', 'updated_at', 'deleted_at'];
}
