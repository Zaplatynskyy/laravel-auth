@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('posts.update', $post->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" value="{{$post->title}}">
        </div>

        <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea class="form-control" id="content" name="content" rows="8">{{$post->content}}</textarea>
        </div>

        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="published" name="published" {{$post->published ? 'checked' : ''}}>
          <label class="form-check-label" for="published">Pubblica</label>
        </div>
        <button type="submit" class="btn btn-primary">Modifica</button>
      </form>
</div>
@endsection