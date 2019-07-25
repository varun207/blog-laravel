@extends('layouts.base')

@section('content')
<div class="jumbotron jumbotron-fluid mt-3">
  <div class="container">
    <h1 class="display-4" style="text-align:center;">Welcome to my blog!</h1>
  </div>
  @if(Auth::user())
    <button style="text-align:center;" class="btn btn-primary"><a style="color:black" href="{{ route('blog-add') }}"> New Blog</a></button>
  @else

  @endif

</div>
<div class="">
  <div class="row">
    @foreach($blogs as $blog)
    <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
      <h1>{{ $blog->title }}</h1>
      <p>{{ str_limit($blog->content, $limit = 15, $end = '...') }}</p>
    </div>
    @endforeach
  </div>


</div>

@endsection
