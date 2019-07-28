@extends('layouts.app')

@section('content')
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
                        <?php
                        
                        $obj = json_decode(pred_data, false);
                        
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
