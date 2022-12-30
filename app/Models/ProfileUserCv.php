<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $email
 * @property string $address
 * @property string $phone
 * @property string $skill
 * @property string $certificate
 * @property string $target
 * @property string $work
 * @property string $work_detail
 * @property string $project
 * @property string $project_detail
 * @property string $created_at
 * @property string $updated_at
 */
class ProfileUserCv extends Model
{

    use HasFactory;
    /**
     * The table associated with the model.
     * 
     * @var string
     */

    protected $table = 'profile_user_cv';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['images', 'status_profile', 'majors', 'user_id', 'status', 'email', 'address', 'phone', 'skill', 'certificate', 'target', 'work', 'work_detail', 'project', 'project_detail', 'created_at', 'updated_at'];
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}