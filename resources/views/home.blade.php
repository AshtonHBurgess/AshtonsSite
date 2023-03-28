@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ __(  'Welcome back '. Auth::user()->name ) }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                        <div class="card text-center">
                            <div class="card-header">
                                <h5 class="card-title">Members Only</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">While logged in you can create, edit and delete site content</p>

                                <img src="ashtons_assets/images/horse_tiny_w400.jpg"  class="w-25 img-fluid center-block " alt="toddler life" >

                            </div>
                            <a class="btn btn-primary" href="{{ route('contents.index') }}">{{ __('Contents') }}</a>
{{--                            <div class="card-footer text-muted">--}}
{{--                              --}}
{{--                            </div>--}}

                        </div>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
