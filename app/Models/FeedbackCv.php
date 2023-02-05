<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $comment
 * @property int $feedback_id
 * @property string $created_at
 * @property string $updated_at
 */
class FeedbackCv extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'feedback_cv';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['employer_id', 'profile_cv_id', 'comment', 'feedback_id', 'created_at', 'updated_at'];
    public function feedback()
    {
        return $this->hasOne(Feedback::class, 'id', 'feedback_id');
    }
    public function employer()
    {
        return $this->hasOne(Employer::class, 'id', 'employer_id');
    }
}