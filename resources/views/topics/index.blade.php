@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Topics') }}</div>

                    <div class="card-body">
                        @foreach($topics as  $topic)
                            <h3>{{$topic->title}} <small>{{$topic->created_at->diffForHumans()}}</small></h3>
                            @if(count($topic->posts)>0)
                                <ul>
                                    @foreach($topic->posts as  $post)
                                        <li>{{$post->body}} - {{$post->user->name}}</li>
                                    @endforeach
                                </ul>
                            @endif
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
