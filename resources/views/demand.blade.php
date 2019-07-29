@extends('layouts.app')

@section('content')
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>


<div class="container" style="margin-top: 10%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Demand Check') }}</div>

                <div class="card-body">
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('company_name') }}" required autocomplete="name" autofocus>

                                
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

@endsection
