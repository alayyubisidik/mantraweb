<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function projectService(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'project_service', 'service_id', 'project_id');
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_service');
    }
}
