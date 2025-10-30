<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Section extends Model
{
    protected $guarded = ["id"];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_section','section_id', 'product_id');
    }
}
