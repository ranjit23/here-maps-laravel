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
                <div class="card-header">{{ __('Create customer request') }}</div>

                <div class="card-body">
                <form method="POST" action="/customers">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('company_name') }}" required autocomplete="name" autofocus>

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('contact') }}</label>

                            <div class="col-md-6">
                                <textarea  type="textarea" class="form-control" name="contact_no"  required autocomplete></textarea>

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('type_of_good') }}</label>

                            <div class="col-md-6">
                                <textarea  type="textarea" class="form-control" name="type_of_good"  required autocomplete></textarea>

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('good_length') }}</label>

                            <div class="col-md-6">
                                <textarea  type="textarea" class="form-control" name="good_length"  required autocomplete></textarea>

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('good_breadth') }}</label>

                            <div class="col-md-6">
                                <textarea  type="textarea" class="form-control" name="good_breadth"  required autocomplete></textarea>

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('good_height') }}</label>

                            <div class="col-md-6">
                                <textarea  type="textarea" class="form-control" name="good_height"  required autocomplete></textarea>

                              
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