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
 * @property int $type
 * @property string $show_name
 * @property string $name
 * @property string $name_kana
 * @property string $representative_name
 * @property string $birthday
 * @property bool $gender
 * @property string $address_prefecture
 * @property string $address_city
 * @property string $address_street
 * @property string $address_building
 * @property int $job_type
 * @property string $job_descriptions
 * @property string $reset_password_token
 * @property string $reset_password_token_expire
 * @property string $registed_datetime
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
    protected $fillable = ['phone_number', 'email', 'password', 'type', 'show_name', 'name', 'name_kana', 'representative_name', 'birthday', 'gender', 'address_prefecture', 'address_city', 'address_street', 'address_building', 'job_type', 'job_descriptions', 'reset_password_token', 'reset_password_token_expire', 'registed_datetime', 'created_at', 'updated_at', 'deleted_at'];
}
