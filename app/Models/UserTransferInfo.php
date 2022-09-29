<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * @property int $id
 * @property int $user_id
 * @property string $account_name_kana
 * @property int $financial_institution_id
 * @property int $branch_id
 * @property string $account_number
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class UserTransferInfo extends Model
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
    protected $fillable = ['user_id', 'account_name_kana', 'financial_institution_id', 'branch_id', 'account_number', 'created_at', 'updated_at', 'deleted_at'];
}
