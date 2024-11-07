<?php

namespace App\Models;

use App\Models\batch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class course extends Model
{
    use HasFactory;
    protected $fillable=["name","syllabus","duration"];

    public function batches(){
        return $this->hasMany('App\Models\course',"course_id");
    }

    public function duration(){
        return $this->duration.  "Months";
    }
}

