<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
     protected $fillable = ['firstname','lastname', 'gender', 'phone'];
 
        protected $primarykey = "id";
        
        public function getGenderNameAttribute()
        {
            $gender_name = ($this->gender == 1) ? "Male" : "Female";
            return $gender_name;
        }
}
