<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = ['goal', 'status', 'lesson_number', 'start_date', 'day_of_month', 'end_date', 'teacher_id', 'address'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'lesson_user', 'lesson_id', 'user_id');
    }


}
