<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'address'
    ];

    protected $table = 'clients';

    protected $primaryKey = 'id_client';

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
