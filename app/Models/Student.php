<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    //These fields must be fillable!
    //use protected
    //takes only array

    //Method 1
    //Fields that my be filled
    // protected $fillable = ['name','email'...];

    //Method 2
    //fields to be guarded
    protected $guarded = [];

}

