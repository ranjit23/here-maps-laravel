<?php

namespace App\Http\Controllers;

use App\Api;
use \Cache;
use Log;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $minutes = 60;
            $forecast = Cache::remember('forecast', $minutes, function () {
              Log::info("Not from cache");
              $app_id = config("here.app_id");
              $app_code = config("here.app_code");
              $lat = config("here.lat_default");
              $lng = config("here.lng_default");
              $url = "https://weather.api.here.com/weather/1.0/report.json?product=forecast_hourly&latitude=${lat}&longitude=${lng}&oneobservation=true&language=it&app_id=${app_id}&app_code=${app_code}";
              Log::info($url);
              $client = new \GuzzleHttp\Client();
              $res = $client->get($url);
              if ($res->getStatusCode() == 200) {
                $j = $res->getBody();
                $obj = json_decode($j);
                $forecast = $obj->hourlyForecasts->forecastLocation;
              }
              return $forecast;
            });
            return view('forecastview', ["forecast" => $forecast]);
          }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    
      
     

      }
      

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Api  $api
     * @return \Illuminate\Http\Response
     */
    public function show(Api $api)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Api  $api
     * @return \Illuminate\Http\Response
     */
    public function edit(Api $api)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Api  $api
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Api $api)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Api  $api
     * @return \Illuminate\Http\Response
     */
    public function destroy(Api $api)
    {
        //
    }
}
