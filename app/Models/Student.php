<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table ='student';
    protected $fillable = ['title','excerpt','body','slug','category_id'];

    protected $guarded =[];


    public function category(){

        return $this->belongsTo(Category::class);
        

    }


}