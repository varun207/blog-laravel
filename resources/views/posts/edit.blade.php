@extends('layouts.base')

@section('content')
<form action="/post/{{ $post->id }}" method='post' class='form-group'>
    @csrf
    @method('PUT')
    <label for="title">Title</label>
    <input type="text" value='{{$post->title}}' name='title' class='form-control'>

    <label for="content">Content</label>
    
    <textarea class="form-control" name='content'  id="summary-ckeditor">{{ $post->content }}</textarea>
    <input type="submit" class='btn btn-primary'>
</form>


@endsection

<!-- <input type="textarea" value='{{$post->content}}' name='content' > -->