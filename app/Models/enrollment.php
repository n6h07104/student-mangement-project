<?php

namespace App\Models;

use App\Models\batch;
use App\Models\payment;
use App\Models\student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class enrollment extends Model
{
    use HasFactory;
    protected $fillable=["enroll_on","join_data","fee","student_id","batch_id"];

    public function student(){
        return $this->belongsTo('App\Models\student',"student_id");
     }
     public function batch(){
        return $this->belongsTo('App\Models\batch',"batch_id");
     }

     public function payments(){
      return $this->hasMany(payment::class,"enrollment_id","id");
     }
}
