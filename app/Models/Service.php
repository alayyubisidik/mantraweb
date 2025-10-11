<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    protected $guarded = ['id'];

    public function projectService(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'project_service', 'service_id', 'project_id');
    }
}
