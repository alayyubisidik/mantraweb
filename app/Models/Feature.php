<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Feature extends Model
{
    protected $guarded = ["id"];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_feature','feature_id', 'product_id');
    }
}
