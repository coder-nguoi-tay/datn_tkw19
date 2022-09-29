<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Kyslik\ColumnSortable\Sortable;

/**
 * @property int $id
 * @property string $phone_number
 * @property string $email
 * @property string $password
 * @property bool $type
 * @property string $show_name
 * @property string $self_introduction
 * @property bool $show_name_description_flag
 * @property string $name
 * @property string $name_kana
 * @property string $representative_name
 * @property string $birthday
 * @property bool $gender
 * @property int $prefecture_id
 * @property int $city_id
 * @property string $address_street
 * @property string $address_building
 * @property bool $job_type
 * @property string $job_descriptions
 * @property string $user_avatar
 * @property int $account_id
 * @property bool $account_id_show_flag
 * @property string $reset_password_token
 * @property string $reset_password_token_expire
 * @property string $last_login_at
 * @property string $phone_number_change
 * @property string $sms_code_change
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class User extends Authenticatable
{
    use HasFactory, SoftDeletes, Sortable;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['phone_number', 'email', 'password', 'type', 'show_name', 'self_introduction', 'show_name_description_flag', 'name', 'name_kana', 'representative_name', 'birthday', 'gender', 'prefecture_id', 'city_id', 'address_street', 'address_building', 'job_type', 'job_descriptions', 'user_avatar', 'account_id', 'account_id_show_flag', 'reset_password_token', 'reset_password_token_expire', 'last_login_at', 'phone_number_change', 'sms_code_change', 'remember_token', 'created_at', 'updated_at', 'deleted_at'];

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
