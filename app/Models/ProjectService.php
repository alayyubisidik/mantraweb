<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectService extends Model
{
    protected $guarded = ['id'];

    public $table = 'project_service';
}
