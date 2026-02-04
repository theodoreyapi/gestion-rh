<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectManager extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'manager_id',
    ];

    protected $table = 'project_managers';

    protected $primaryKey = 'id_manager';

   public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id_project');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'manager_id', 'id');
    }
}
