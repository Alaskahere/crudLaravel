<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'last_name', 'expedient', 'module_id'];

    //UNO A MUCHOS INVERSA
    public function module(){
        return $this->belongsTo(Module::class);
    }
}
