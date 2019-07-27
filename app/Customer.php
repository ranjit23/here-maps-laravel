<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = ['user_id', 'name','contact_no','type_of_good','good_length','good_breadth','good_height','route_a','route_b','vehicle_no'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
