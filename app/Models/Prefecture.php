<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;
use Rennokki\QueryCache\Traits\QueryCacheable;

/**
 * @property int $id
 * @property int $area_id
 * @property string $prefecture_name
 * @property int $order_number
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Prefecture extends Model
{
    use HasFactory, SoftDeletes, Sortable, QueryCacheable;

    protected $cacheFor = 31536000; //1 year
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['area_id', 'prefecture_name', 'order_number', 'created_at', 'updated_at', 'deleted_at'];
}
