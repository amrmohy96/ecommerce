<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Admin\SubcategoryTranslation
 *
 * @property int $id
 * @property string $locale
 * @property string $name
 * @property int $subcategory_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SubcategoryTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubcategoryTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubcategoryTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubcategoryTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubcategoryTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubcategoryTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubcategoryTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubcategoryTranslation whereSubcategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubcategoryTranslation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SubcategoryTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name'];
}
