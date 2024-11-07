<?php

namespace App\Models;

use App\Models\enrollment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class student extends Model
{
    use HasFactory;

    protected $fillable=["name","address","mobile"];

    public function enrollment(){
        return $this->hasMany('App\Models\enrollment',"student_id");
    }
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    //     "created_at",
    //     "updated_at"
    // ];
}
