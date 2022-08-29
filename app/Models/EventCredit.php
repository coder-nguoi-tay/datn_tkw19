<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * @property integer $id
 * @property integer $event_id
 * @property integer $user_credit_id
 * @property string $subcription_id
 * @property integer $parent_event_credit_id
 * @property string $subcription_expried_datetimed
 * @property boolean $using_complete_flag
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class EventCredit extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    use HasFactory, SoftDeletes, Sortable;

    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['event_id', 'user_credit_id', 'subcription_id', 'parent_event_credit_id', 'subcription_expried_datetimed', 'using_complete_flag', 'created_at', 'updated_at', 'deleted_at'];
}
