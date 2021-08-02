@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Success..!!') }}</div>

                <div class="card-body">


                    {{ __('Your Account Created Seccessfully..!!!') }}

                    <a href="{{ route('landing') }}" class="btn btn-success">GO Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
