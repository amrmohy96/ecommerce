<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Shipping
 *
 * @property int $id
 * @property string $order_id
 * @property string $ship_name
 * @property string $ship_phone
 * @property string $ship_email
 * @property string $ship_address
 * @property string $ship_city
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping query()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereShipAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereShipCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereShipEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereShipName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereShipPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Shipping extends Model
{
    protected $guarded = [];
}
