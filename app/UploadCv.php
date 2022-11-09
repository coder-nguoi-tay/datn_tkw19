<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $user_id
 * @property string $file_cv
 * @property string $created_at
 * @property string $updated_at
 */
class UploadCv extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'upload_cv';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'file_cv', 'created_at', 'updated_at'];
}
