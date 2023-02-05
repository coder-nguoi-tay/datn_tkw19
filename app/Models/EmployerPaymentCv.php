<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $profile_cv_id
 * @property int $employer_id
 * @property string $created_at
 * @property string $updated_at
 */
class EmployerPaymentCv extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'employer_payment_cv';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['profile_cv_id', 'employer_id', 'created_at', 'updated_at'];
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}