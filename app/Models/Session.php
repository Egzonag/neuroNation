<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
 
class Session extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'course_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function sessionExercises()
    {
        return $this->hasMany(SessionExercise::class);
    }
    
     // Calculate total score for the session
     public function calculateTotalScore(): int
     {
         return $this->sessionExercises->sum('score');
     }
}