<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $vnp_Amount
 * @property string $vnp_BankCode
 * @property string $vnp_CardType
 * @property string $vnp_OrderInfo
 * @property string $vnp_PayDate
 * @property string $vnp_ResponseCode
 * @property string $vnp_TmnCode
 * @property string $vnp_TransactionNo
 * @property string $vnp_TransactionStatus
 * @property string $vnp_TxnRef
 * @property string $created_at
 * @property string $updated_at
 */
class Vnpay extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'vnpay';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'vnp_Amount', 'vnp_BankCode', 'vnp_CardType', 'vnp_OrderInfo', 'vnp_PayDate', 'vnp_ResponseCode', 'vnp_TmnCode', 'vnp_TransactionNo', 'vnp_TransactionStatus', 'vnp_TxnRef', 'created_at', 'updated_at'];
}