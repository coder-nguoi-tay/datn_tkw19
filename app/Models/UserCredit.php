<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * @property int $id
 * @property int $user_id
 * @property string $card_id
 * @property bool $using_flag
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class UserCredit extends Model
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
    protected $fillable = ['user_id', 'card_id', 'using_flag', 'created_at', 'updated_at', 'deleted_at'];
}
