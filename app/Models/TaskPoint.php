<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class TaskPoint extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
        'task_id',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
