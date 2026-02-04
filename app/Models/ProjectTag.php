<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTag extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'tag',
    ];

    protected $table = 'project_tags';

    protected $primaryKey = 'id_tag';

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
