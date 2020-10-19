<?php

namespace App;

use App\Models\Admin\Product;
use Auth;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Wishlist
 *
 * @property int $id
 * @property int $user_id
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist query()
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist whereUserId($value)
 * @mixin \Eloquent
 * @property-read Product $product
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist authUser()
 */
class Wishlist extends Model
{
    protected $guarded = [];

    public function checkIfInWishList($id)
    {
        $userId = Auth::id();
        return $this->where('user_id', $userId)
            ->where('product_id', $id)
            ->first();
    }

    // wish
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeAuthUser($query)
    {
        return $query->where('user_id', Auth::id());
    }
}
