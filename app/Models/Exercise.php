<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Exercise extends Model
{
    protected $fillable = ['name', 'points', 'category_id', 'course_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function sessionExercises()
    {
        return $this->hasMany(SessionExercise::class);
    }
}