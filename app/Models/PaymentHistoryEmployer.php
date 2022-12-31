<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $user_id
 * @property int $price
 * @property string $desceibe
 * @property string $form
 * @property string $created_at
 * @property string $updated_at
 */
class PaymentHistoryEmployer extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'payment_history_emplyer';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'price', 'desceibe', 'form', 'created_at', 'updated_at'];
}