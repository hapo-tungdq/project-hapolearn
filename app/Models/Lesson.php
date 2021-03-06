<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title', 'description', 'requirement', 'content', 'course_id', 'learn_time'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'lesson_id')->where('course_id', null);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'lesson_users', 'lesson_id', 'used_id');
    }
}
