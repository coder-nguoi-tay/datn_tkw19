<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * @property integer $id
 * @property string $tag_name
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Tag extends Model
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
    protected $fillable = ['tag_name', 'created_at', 'updated_at', 'deleted_at'];
}
