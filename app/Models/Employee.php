<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employee';
    protected $fillable = [
        'fname','lname','no_hp','email','user_id','gender','hobby'
    ];

    public function company(){
        return $this->belongsTo(Company::class, 'user_id', 'id');
    }
}
