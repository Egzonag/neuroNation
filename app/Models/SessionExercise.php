<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class SessionExercise extends Model
{
    protected $fillable = ['session_id', 'exercise_id', 'score'];

    public function session()
    {
        return $this->belongsTo(Session::class);
    }

    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }
}