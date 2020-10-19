<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Admin\CouponTranslation
 *
 * @property int $id
 * @property string $locale
 * @property string $coupon
 * @property int $discount
 * @property int $coupon_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CouponTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponTranslation whereCoupon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponTranslation whereCouponId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponTranslation whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponTranslation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CouponTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['coupon', 'discount'];
}
