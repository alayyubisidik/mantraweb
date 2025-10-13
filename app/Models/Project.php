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

    public function projectService(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'project_service', 'project_id', 'service_id');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'project_service');
    }

}
