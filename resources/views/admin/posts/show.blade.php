@extends('layouts.app')

@section('content')
<div class="container my-5">
  <div>
    <span class="h2">{{ $post->title }}</span>

    @if ($post->tags)
      @foreach ($post->tags as $tag)
        <span class="badge badge-info">{{ $tag->name }}</span>  
        
      @endforeach
    @endif
    

    <p>{{  $post->content}}</p>
    <img src="{{ $post->image }}" alt="{{ $post->title }}">
    <h5>Dr.{{ $post->author }}</h5>

    <a href="{{ route( 'admin.posts.index') }}" class="btn btn-primary"> >>Torna indietro</a>
  </div> 
</div>    
@endsection