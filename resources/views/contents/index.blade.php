@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ashton\'s Content') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        @if(Auth::check())
                            <link rel="stylesheet" href="https://bootswatch.com/5/vapor/bootstrap.min.css">
                        <a class= "btn btn-primary" href="{{ route('contents.create') }}">New Content</a>

                        <table class="table">
                            <thead>
                            <tr>
                                <th >Name</th>
                                <th >Description</th>
                                <th >Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contents as $content)
                                <tr>
{{--                                    @if($content->image != null)--}}
{{--                                        <img src="{{$content->image}}" alt={{$content->name}}>--}}
{{--                                    @endif--}}
                                    <td style="width: 100%">{{$content->name}}</td>
                                    <td style="width: 100%">{{$content->description}}</td>


                                    <td>
                                        <a class="btn btn-warning"href="{{ route('contents.edit',[ $content->id]) }}">Edit</a>

                                    </td>
                                    <td>
                                        {{--                                            <a class="btn btn-danger"href="{{ route('countries.destroy',[ $country->id]) }}">Delete</a>--}}

                                        <form method="POST" action="{{ route('contents.destroy',$content->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class=" btn btn-danger">Delete</button>
                                            @csrf
                                        </form>

                                    </td>

                                </tr>
                                @endforeach


                            </tbody>
                        </table>








                        @else
{{--                        IF GUEST--}}
                            @foreach($contents as $content)
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    @if($content->image != null)
                                        <img src="{{$content->image}}" class="img-fluid rounded-start" alt={{$content->name}} >
                                    @endif

                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$content->name}}</h5>


                                        <td style="width: 100%">{{$content->description}}</td>


                                        <p class="card-text"><small class="text-muted">Created: {{$content->created_at}}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach




{{--                            //END ELSE GUEST--}}
                        @endif


{{--                    END OF MAIN CARD--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
