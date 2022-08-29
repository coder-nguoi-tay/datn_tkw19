<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * @property int $id
 * @property string $prefecture_name
 * @property int $order_number
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Prefecture extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    use HasFactory, SoftDeletes, Sortable;

    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['prefecture_name', 'order_number', 'created_at', 'updated_at', 'deleted_at'];
}
