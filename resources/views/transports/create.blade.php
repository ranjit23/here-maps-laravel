<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css" />

</head>
<body>
@extends('layouts.app')

@section('content')



  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top:20%;">
                <div class="card-header">{{ __('Create Transport') }}</div>

                <div class="card-body">
                <form method="POST" action="/transports">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('company_name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="company_name" value="{{ old('company_name') }}" required autocomplete="name" autofocus>

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('contact') }}</label>

                            <div class="col-md-6">
                                <textarea  type="textarea" class="form-control" name="contact"  required autocomplete></textarea>

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('no_of_vehicles') }}</label>

                            <div class="col-md-6">
                                <textarea  type="textarea" class="form-control" name="no_of_vehicles"  required autocomplete></textarea>

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('available_length') }}</label>

                            <div class="col-md-6">
                                <textarea  type="textarea" class="form-control" name="available_length"  required autocomplete></textarea>

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('available_breadth') }}</label>

                            <div class="col-md-6">
                                <textarea  type="textarea" class="form-control" name="available_breadth"  required autocomplete></textarea>

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('available_height') }}</label>

                            <div class="col-md-6">
                                <textarea  type="textarea" class="form-control" name="available_height"  required autocomplete></textarea>

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('truck_height') }}</label>

                            <div class="col-md-6">
                                <textarea  type="textarea" class="form-control" name="truck_height"  required autocomplete></textarea>

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('truck_width') }}</label>

                            <div class="col-md-6">
                                <textarea  type="textarea" class="form-control" name="truck_width"  required autocomplete></textarea>

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('departure_time') }}</label>

                            <div class="col-md-6">
                                <textarea  type="textarea" class="form-control" name="departure_time"  required autocomplete></textarea>

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('route_a') }}</label>

                            <div class="col-md-6">
                                <textarea  type="textarea" class="form-control" name="route_a"  required autocomplete></textarea>

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('route_b') }}</label>

                            <div class="col-md-6">
                                <textarea  type="textarea" class="form-control" name="route_b"  required autocomplete></textarea>

                              
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('vehicle_no') }}</label>

                            <div class="col-md-6">
                                <textarea  type="textarea" class="form-control" name="vehicle_no"  required autocomplete></textarea>

                              
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                        

                                            </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
@endsection