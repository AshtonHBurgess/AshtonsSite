@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Content Edit') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif







                <form action="{{  route('contents.update', $content->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Title</label>
                        <input name='name' type="text" class="form-control" id="name" value="{{ old('title')??$content->name }}" placeholder="Enter Title ">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{$message }}</div>
                    @enderror




{{--                    sds--}}

                    <div class="form-group">
                        <label for="image">Image Url</label>
                        <input name='image' type="text" class="form-control" id="image" value="{{old('image_url')??$content->image}}" placeholder="enter Image Url" >
                        @error('image')
                        <div class="alert alert-danger">{{$message }}</div>
                        @enderror





                        <div class="form-group">
                            <label for="description">Content</label>
                            <input name='description' type="text" class="form-control" id="description" value="{{ old('content')??$content->description }}" placeholder="Enter Content ">
                        </div>
                        @error('description')
                        <div class="alert alert-danger">{{$message }}</div>
                        @enderror
                        @csrf

{{--                        <div class="form-group">--}}
{{--                            <label for="type">Content</label>--}}
{{--                            <input name='type' type="text" class="form-control" id="type" value="{{ old('content')??$content->type }}" placeholder="Enter Content ">--}}
{{--                        </div>--}}
{{--                        @error('type')--}}
{{--                        <div class="alert alert-danger">{{$message }}</div>--}}
{{--                        @enderror--}}
{{--                        @csrf--}}

                        <button class="btn btn-primary"  type="submit">Submit</button>
                        <a class= "btn border-danger" href ="{{ route('contents.index') }}">Cancel</a>

                    </div>
                </form>



@endsection
