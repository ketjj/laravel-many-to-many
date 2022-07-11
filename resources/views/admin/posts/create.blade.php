@extends('layouts.app')

@section('content')
<div class="container my-5">
  <h3>Inserisci un nuovo post</h3>

  {{-- @if($errors->any()).....@foreach($errors->all() as $error..../@endforeach...@endif --}}
  <form action="{{ route('admin.posts.store')}}" method="POST">
    @csrf
    
    <div class="form-group my-3">
      <label for="title" class="my-2" >Titolo</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="titolo da inserire"
      value="{{ old('title') }}">
      @error('title')
       <div class="custom_error">{{ $message}}</div>
      @enderror
    </div>

    <div class="form-group my-3">
      <label for="content" class="my-2">Contenuto</label>
      <input type="text" name="content" class="form-control @error('content') is-invalid @enderror" placeholder="contenuto"
      value="{{ old('content') }}">
      @error('content')
      <div class="custom_error">{{ $message}}</div>
     @enderror
    </div>

    <div class="form-group my-3">
      <label for="image" class="my-2">URL immagine</label>
      <input type="text" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="URL immagine"
      value="{{ old('image') }}">
      @error('image')
      <div class="custom_error">{{ $message}}</div>
     @enderror
    </div>

    <div class="form-group my-3">
      <label for="author" class="my-2">Autore</label>
      <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" placeholder="autore del post"
      value="{{ old('author') }}">
      @error('author')
      <div class="custom_error">{{ $message}}</div>
     @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection