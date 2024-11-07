<?php

namespace App\Models;

use App\Models\course;
use App\Models\enrollment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class batch extends Model
{
    use HasFactory;

    protected $fillable=["name","course_id","start_data"];

    public function courses(){
       return $this->belongsTo('App\Models\course',"course_id");
    }
    public function enrollment(){
        return $this->hasMany('App\Models\enrollment',"batch_id");
    }
}
