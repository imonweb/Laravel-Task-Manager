<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskList extends Model
{
    protected $fillable = [
        'title',
        'description',
       
        'user_id'
    ];
    public function list(): HasMany
    {
        return $this->hasMany(Task::class);
    }
}
