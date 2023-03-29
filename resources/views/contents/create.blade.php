@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Content Create') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{  route('contents.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input name='name' type="text" class="form-control" id="name" value="{{old('name')}}" placeholder="Enter Content Name">
                                @error('name')
                                <div class="alert alert-danger">{{$message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <input name='description' type="text" class="form-control" id="description" value="{{old('description')}}" placeholder="Enter Content Description">
                                @error('description')
                                <div class="alert alert-danger">{{$message }}</div>
                                @enderror
                            </div>



                            <div class="form-group">
                                <label for="image">Image</label>
                                <input name='image' type="text" class="form-control" id="image" value="{{old('image')}}" placeholder="Enter Image Url" >
                                @error('image')
                                <div class="alert alert-danger">{{$message }}</div>
                                @enderror

                            </div>


                            <div class="form-group">
                                <label for="type">Type</label>
                                <input name='type' type="text" class="form-control" id="type" value="{{old('type')}}" placeholder="Enter Content Type">
                                @error('type')
                                <div class="alert alert-danger">{{$message }}</div>
                                @enderror
                            </div>


                            <button class="btn btn-primary"  type="submit">Submit</button>
                            <a class= "btn border-danger" href ="{{ route('contents.index') }}">Cancel</a>
                            @csrf
                        </form>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
