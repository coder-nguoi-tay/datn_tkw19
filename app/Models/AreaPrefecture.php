<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * @property integer $id
 * @property integer $area_id
 * @property integer $prefecture_id
 * @property int $order_number
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class AreaPrefecture extends Model
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
    protected $fillable = ['area_id', 'prefecture_id', 'order_number', 'created_at', 'updated_at', 'deleted_at'];
}
