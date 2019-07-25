@extends('layouts.base')

@section('content')

<form method="post" action="/blog/store">
  @csrf
  <div class="form-group">
    <label for="formGroupExampleInput">Title</label>
    <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Content</label>
    <input name="content" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
  </div>
  <input type="submit" name="submit" value="submit">
</form>

@endsection
