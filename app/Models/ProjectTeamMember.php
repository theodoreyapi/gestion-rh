<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTeamMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'member_id',
    ];

    protected $table = 'project_team_members';

    protected $primaryKey = 'id_member';

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id_project');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'member_id', 'user_id', 'id');
    }
}
