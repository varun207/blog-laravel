@extends('layouts.base')

@section('content')
    <form action="/post" enctype="multipart/form-data" method='post' class='form-group'>
        @csrf
        <label for="title">Title</label>
        <input type="text" name='title' class='form-control'>

        <label for="imageInput">File input</label>
        <input data-preview="#preview" name="input_img" type="file" id="imageInput">

        <label for="content">Content</label>
        
        <textarea class="form-control" name='content' value='' id="summary-ckeditor"></textarea>
        <input type="submit" class='btn btn-primary'>
    </form>

@endsection
<!-- <input type="textarea" name='content' class='textarea'> -->