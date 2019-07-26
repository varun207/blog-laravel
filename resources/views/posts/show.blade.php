@extends('layouts.base')

@section('content')
    <h1>{{ $post->title }}</h1>
    <img src="{{URL::to('/images/'.$post->post_image)}}" alt="">
    <p>{!! $post->content !!}</p>

    @if(Auth::check())
    <a href="/post/{{ $post->id }}/edit" class='btn btn-primary'>Edit Post</a> 
    @endif
@endsection