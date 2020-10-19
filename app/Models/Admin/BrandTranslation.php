<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Admin\BrandTranslation
 *
 * @property int $id
 * @property string $locale
 * @property string $name
 * @property int $brand_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BrandTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BrandTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BrandTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|BrandTranslation whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrandTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrandTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrandTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrandTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrandTranslation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class BrandTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'logo'];
}
