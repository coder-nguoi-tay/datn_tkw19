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
 * @property int $sms_not_confirm_count
 * @property int $sms_send_failed_count
 * @property string $block_expried_time
 * @property string $datetime
 */
class UserTmp extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    use HasFactory, SoftDeletes, Sortable;

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
    protected $fillable = ['phone_number', 'sms_confirm_flag', 'sms_not_confirm_count', 'sms_send_failed_count', 'block_expried_time', 'datetime'];
}
