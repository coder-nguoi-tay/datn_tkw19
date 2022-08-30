<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * @property int $id
 * @property string $hira_name
 * @property string $kata_name
 * @property string $phone_number
 * @property string $email
 * @property string $content
 * @property string $agent
 * @property string $ip
 * @property bool $type
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Contact extends Model
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
    protected $fillable = ['hira_name', 'kata_name', 'phone_number', 'email', 'content', 'agent', 'ip', 'type', 'created_at', 'updated_at', 'deleted_at'];
}
