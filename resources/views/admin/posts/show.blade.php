@extends('layouts.app')

@section('content')
<div class="container my-5">
  <div>
    <h4>{{ $post->title }}</h4>
    <p>{{  $post->content}}</p>
    <img src="{{ $post->image }}" alt="{{ $post->title }}">
    <h5>Dr.{{ $post->author }}</h5>

    <a href="{{ route( 'admin.posts.index') }}" class="btn btn-primary"> >>Torna indietro</a>
  </div>     
@endsection