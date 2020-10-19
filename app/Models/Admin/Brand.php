<?php

namespace App\Models\Admin;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Admin\Brand
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand query()
 * @mixin \Eloquent
 * @property int $id
 * @property string|null $logo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Admin\BrandTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Admin\BrandTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Brand listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Brand translated()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand withTranslation()
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Admin\Product[] $products
 * @property-read int|null $products_count
 */
class Brand extends Model implements TranslatableContract
{
    // 2. To add translation methods
    use Translatable;

    // 3. To define which attributes needs to be translated
    public $translatedAttributes = ['name'];
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
