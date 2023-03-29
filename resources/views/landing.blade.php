@extends('layouts.app')

@section('content')
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" >
                    <div class="card-header">{{ __('Welcome My Site') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <div class="card text-center">
                                <div class="card-header">




                                    <div id="carouselExampleDark" class="carousel carousel-dark slide border border-dark" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="10000">
                                                <img src="{{ URL::asset('ashtons_assets/images/Island.jpg') }}" class="d-block w-100 "  alt="...">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="{{ URL::asset('ashtons_assets/images/Island.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ URL::asset('ashtons_assets/images/Island.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>




                                </div>
                                <div class="card-body">

                                    <div class="card text-center">
                                        <div class="card-header">
                                            <h2>LIVE ! I&#39m Ashton, and this is a basic laravel site</h2>
                                        </div>


                                        <div class="card text-md-start">
                                        <ul>
                                            <li>I will change this carousel to images of each of my bicycles at some point</li>
{{--                                            <li>Destroyed Doom Eternal in Nightmare Mode 2022</li>--}}
{{--                                            <li>BFA (Visual Arts) Graduate 2018</li>--}}
                                        </ul>

                                        </div>
                                    </div>



                            </div>







                </div>
            </div>
        </div>
    </div>
</div>





@endsection
