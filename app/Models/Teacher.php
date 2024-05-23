<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable= ['name','document','adress','phone'];

    // UNO A UNO
    public function module(){
        return $this->hasOne(Module::class);
    }
}
