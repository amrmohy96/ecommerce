<?php

namespace App\Models\Admin;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Admin\Subcategory
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Admin\Category $Category
 * @property-read \App\Models\Admin\SubcategoryTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Admin\SubcategoryTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory translated()
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subcategory withTranslation()
 */
class Subcategory extends Model implements TranslatableContract
{
    // 2. To add translation methods
    use Translatable;

    // 3. To define which attributes needs to be translated
    public $translatedAttributes = ['name'];
    protected $guarded = [];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}
