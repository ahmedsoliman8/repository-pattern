@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Topics') }}</div>

                    <div class="card-body">

                        <h3>{{$topic->title}} <small>{{$topic->created_at->diffForHumans()}}</small></h3>

                            <ul>
                                @foreach($topic->posts as  $post)
                                    <li>{{$post->body}}</li>
                                @endforeach
                            </ul>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
