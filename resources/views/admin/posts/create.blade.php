@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea class="form-control" id="content" name="content" rows="8"></textarea>
        </div>

        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="published" name="published">
          <label class="form-check-label" for="published">Pubblica</label>
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
      </form>
</div>
@endsection