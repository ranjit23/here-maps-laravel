<?php

namespace App\Http\Controllers;

use App\Transport;
use App\User;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
         $transports = Transport::where('user_id', auth()->id())->get();
        return view('transports.index', compact('transports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('transports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attribute = request()->validate([
            'company_name' => ['required'],
            'contact' => ['required'],
            'no_of_vehicles' => ['required'],
            'available_length' => ['required'],
            'available_breadth' => ['required'],
            'available_height' => ['required'],
            'truck_height' => ['required'],
            'truck_width' => ['required'],
            'departure_time' => ['required'],
            'route_a' => ['required'],
            'route_b' => ['required'],
            'vehicle_no' => ['required'],
           
        ]);
        $attribute['user_id'] = auth()->id();
        Transport::create($attribute);
        return redirect('/transports');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function show(Transport $transport)
    {
        return view('posts.show',compact('transport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transport = Transport::findorfail($id);
        if($transport->user_id != auth()->id()){
           abort(403);
       }
       return view('transports.edit', compact('transport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $transport = Transport::findorfail($id);
        $transport->company_name = request('company_name');
        $transport->contact = request('contact');
        $transport->no_of_vehicle = request('no_of_vehicle');
        $transport->available_length = request('available_length');
        $transport->available_breadth = request('available_breadth');
        $transport->available_height = request('available_height');
        $transport->truck_height = request('truck_height');
        $transport->truck_width = request('truck_height');
        $transport->departure_time = request('departure_time');
        $transport->route_a = request('route_a');
        $transport->route_b = request('route_b');
        $transport->vehicle_no = request('vehicle_no');
       
        $transport->save();
        return redirect('/transports');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Transport::findorfail($id)->delete();
                    
        return redirect('/transports');
    }
}
