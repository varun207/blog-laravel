@extends('layouts.base')

@section('content')
  <h1>Index Page</h1>

  <form class="pure-form">
    <input id="cityInput" type="text" placeholder="Enter Name" />
    <button type="submit">Submit</button>

    <div id="root"></div>
  </form>
@endsection
