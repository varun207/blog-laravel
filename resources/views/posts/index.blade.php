@extends('layouts.base')

@section('content')
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <h1><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h1>
            <p>{!! str_limit($post->content, $limit = 20, $end = '...') !!}</p>
        @endforeach
    @endif

    @if(Auth::user())
    <button><a href="/post/create">Create Post</a></button>
    @else
    @endif
@endsection

