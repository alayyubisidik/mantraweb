<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }    

    public function projectCategory(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'project_category', 'project_id', 'category_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'project_category');
    }

}
