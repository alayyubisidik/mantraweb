<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $guarded = ["id"];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'product_category', 'product_id', 'category_id');
    }

    public function features(): BelongsToMany
    {
        return $this->belongsToMany(Feature::class, 'product_feature', 'product_id', 'feature_id');
    }

    public function sections(): BelongsToMany
    {
        return $this->belongsToMany(Section::class, 'product_section', 'product_id', 'section_id');
    }

}
