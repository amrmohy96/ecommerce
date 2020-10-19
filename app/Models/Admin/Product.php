<?php

namespace App\Models\Admin;

use App\OrderDetails;
use App\Wishlist;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Admin\Product
 *
 * @property int $id
 * @property int $category_id
 * @property int|null $subcategory_id
 * @property int|null $brand_id
 * @property string|null $video_link
 * @property int|null $main_slider
 * @property int|null $hot_deal
 * @property int|null $best_rated
 * @property int|null $mid_slider
 * @property int|null $hot_new
 * @property int|null $trend
 * @property string|null $image_one
 * @property string|null $image_two
 * @property string|null $image_three
 * @property int|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Admin\Brand|null $brand
 * @property-read \App\Models\Admin\Category $category
 * @property-read \App\Models\Admin\ProductTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Admin\ProductTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Product listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Product orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Product orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Product orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product translated()
 * @method static \Illuminate\Database\Eloquent\Builder|Product translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBestRated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereHotDeal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereHotNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImageOne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImageThree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImageTwo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMainSlider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMidSlider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSubcategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTrend($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereVideoLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product withTranslation()
 * @mixin \Eloquent
 * @property-read \App\Models\Admin\Subcategory|null $subcategory
 * @property-read \Illuminate\Database\Eloquent\Collection|Wishlist[] $wishlist
 * @property-read int|null $wishlist_count
 * @property-read \Illuminate\Database\Eloquent\Collection|OrderDetails[] $details
 * @property-read int|null $details_count
 */
class Product extends Model implements TranslatableContract
{
    public $translatedAttributes = ['name', 'discount', 'code', 'quantity', 'details', 'size', 'color', 'price', 'discount'];
    // 2. To add translation methods
    use Translatable;

    public function getNameAttribute()
    {
        return 'sdf';
    }
    protected $with=['category','subCategory','brand'];
    // 3. To define which attributes needs to be translated
    protected $guarded = [];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

    // order details
    public function details()
    {
        return $this->hasMany(OrderDetails::class);
    }

}
