<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Category extends Model
{
    protected $fillable = ['name'];

    //each category can have multiple exercises
    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }
}