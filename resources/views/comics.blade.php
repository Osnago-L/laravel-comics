@extends('layouts.app')

@section('content')
<div class="main">
    <div class="cardscont container">
      <div class="category">CURRENT SERIES</div>

      @foreach ($comic as $key)
      <div class="cards">
        <img src="{{$key["thumb"]}}" alt="">
        <span>{{$key["title"]}}</span>
      </div>
      @endforeach

    </div>
    <button>Load More</button>
  </div>
@endsection