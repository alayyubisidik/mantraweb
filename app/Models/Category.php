<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function ProjectCategory(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'project_category', 'category_id', 'project_id');
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_category');
    }

}
