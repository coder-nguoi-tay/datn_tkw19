<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * @property int $id
 * @property string $phone_number
 * @property bool $sms_confirm_flag
 * @property string $sms_code
 * @property string $sms_expried_datetime
 * @property int $sms_not_confirm_count
 * @property int $sms_send_failed_count
 * @property string $block_expried_time
 * @property string $last_register
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class UserTmp extends Model
{
    use HasFactory, SoftDeletes, Sortable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users_tmp';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['phone_number', 'sms_confirm_flag', 'sms_code', 'sms_expried_datetime', 'sms_not_confirm_count', 'sms_send_failed_count', 'block_expried_time', 'last_register', 'created_at', 'updated_at', 'deleted_at'];
}
