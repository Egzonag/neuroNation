<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Course extends Model
{
    protected $fillable = ['name'];

    //each course can have multiple exercises
    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }
    //each course can have multiple sessions
    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
}