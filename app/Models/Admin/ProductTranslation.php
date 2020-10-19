<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Admin\ProductTranslation
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $quantity
 * @property string $details
 * @property string $color
 * @property string $size
 * @property string $price
 * @property string|null $discount
 * @property string $locale
 * @property int $product_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProductTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'discount', 'code', 'quantity', 'details', 'size', 'color', 'price'];
}
