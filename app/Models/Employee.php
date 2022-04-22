<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function setLanguagesAttribute($value)
    {
        $this->attributes['languages'] = json_encode($value);
    }
    
    public function getLanguagesAttribute($value)
    {
        return json_decode($value);
    }
    
    public function setWillingToWorkAttribute($value)
    {
        if($value == "Yes")
            $this->attributes['willing_to_work'] = 1;
        else
            $this->attributes['willing_to_work'] = 0;
        
    }
    public function getWillingToWorkAttribute($value)
    {
        return $value == 1 ? "Yes" : "No";
    }
    
}
