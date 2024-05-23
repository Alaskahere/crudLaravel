<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = ['name','teacher_id'];

    //Relacion Uno a Uno
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    // UNO A MUCHOS
    public function students(){ //students
        return $this->hasMany(Student::class);
    }
}
