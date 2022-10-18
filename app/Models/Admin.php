<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Kyslik\ColumnSortable\Sortable;


/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $reset_password_token
 * @property string $reset_password_token_expire
 * @property string $last_login_at
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Admin extends Authenticatable  
{
    use HasFactory, SoftDeletes;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $table = 'admin';
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'email', 'email_verified_at', 'password', 'reset_password_token', 'reset_password_token_expire', 'last_login_at', 'remember_token', 'created_at', 'updated_at', 'deleted_at','role','status'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'reset_password_token',
        'reset_password_token_exprire',
        'last_login_at',
        'change_password_token',
        'change_email_token_expired',
    ];

}
