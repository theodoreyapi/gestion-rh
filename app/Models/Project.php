<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_code',
        'name',
        'client_id',
        'start_date',
        'end_date',
        'priority',
        'project_value',
        'price_type',
        'description',
        'logo',
        'file',
        'status'
    ];

    protected $table = 'projects';

    protected $primaryKey = 'id_project';

    public function teamMembers()
    {
        return $this->hasMany(ProjectTeamMember::class, 'project_id', 'id_project');
    }

    public function teamLeaders()
    {
        return $this->hasMany(ProjectTeamLeader::class, 'project_id', 'id_project');
    }

    public function managers()
    {
        return $this->hasMany(ProjectManager::class, 'project_id', 'id_project');
    }

    public function tags()
    {
        return $this->hasMany(ProjectTag::class, 'project_id', 'id_project');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id_client');
    }
}
