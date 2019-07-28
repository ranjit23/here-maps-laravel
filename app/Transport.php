<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
//, 'company_name','contact','no_of_vehicles','available_length','available_breadth','available_height','truck_height','truck_width','departure_time','route_a','route_b','vehicle_no'