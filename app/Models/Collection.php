<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $rate
 * @property string $icon_url
 * @property string $image_url
 * @property int $owner_number
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Collection extends Model
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
    protected $fillable = ['name', 'description', 'rate', 'icon_url', 'image_url', 'owner_number', 'created_at', 'updated_at', 'deleted_at'];
}
