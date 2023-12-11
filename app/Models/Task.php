<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TaskPoint;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function task_point()
    {
        return $this->hasMany(TaskPoint::class);
    }
}
