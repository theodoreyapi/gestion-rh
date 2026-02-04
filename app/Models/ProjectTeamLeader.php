<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTeamLeader extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'leader_id',
    ];

    protected $table = 'project_team_leaders';

    protected $primaryKey = 'id_leader';

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
