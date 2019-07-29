<?php

namespace App\Http\Controllers;
use App\Customer;
use App\User;
use App\Transport;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $transports = Transport::orderBy('created_at', 'desc')->get();
        
        return view('home' , compact( 'transports'));
        $forecast = [];
        return view('forecastview', ["forecast" => $forecast]);
        $geolocation = [];
        return view('geolocationview', ["geolocation" => $geolocation]);
    }
}
