<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * @property int $id
 * @property int $event_id
 * @property int $user_credit_id
 * @property string $subcription_id
 * @property int $parent_event_credit_id
 * @property string $subcription_expried_datetime
 * @property bool $using_complete_flag
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class EventCredit extends Model
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
    protected $fillable = ['event_id', 'user_credit_id', 'subcription_id', 'parent_event_credit_id', 'subcription_expried_datetime', 'using_complete_flag', 'created_at', 'updated_at', 'deleted_at'];
}
