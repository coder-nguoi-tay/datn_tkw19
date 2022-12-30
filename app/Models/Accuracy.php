<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $user_id
 * @property string $images
 * @property string $created_at
 * @property string $updated_at
 */
class Accuracy extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'accuracy';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['status', 'user_id', 'images', 'created_at', 'updated_at'];
}