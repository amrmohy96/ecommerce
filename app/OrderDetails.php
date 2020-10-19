<?php

namespace App;

use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Model;

/**
 * App\OrderDetails
 *
 * @property int $id
 * @property int $order_id
 * @property string|null $product_id
 * @property string|null $product_name
 * @property string|null $color
 * @property string|null $size
 * @property string|null $quantity
 * @property string|null $single_price
 * @property string|null $total_price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetails query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetails whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetails whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetails whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetails whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetails whereProductName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetails whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetails whereSinglePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetails whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetails whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetails whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read Product|null $product
 */
class OrderDetails extends Model
{
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
