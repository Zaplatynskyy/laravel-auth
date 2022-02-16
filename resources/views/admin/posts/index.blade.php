@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Posts List</h3>
                    <a href="{{route('posts.create')}}">
                        <button type="button" class="btn btn-primary">Nuovo</button>
                    </a>
                </div>

                <div class="card-body">
                   <ul class="posts_list">
                       @foreach ($posts as $post)
                           <li>
                               <div class="head_post d-flex justify-content-between">
                                    <h2>{{$post->title}}</h2>
                                    <div class="buttons">
                                        <button type="button" class="btn btn-warning">Modifica</button>
                                        <button type="button" class="btn btn-danger">Elimina</button>
                                    </div>
                               </div>
                               
                               <p class="my-3">{{$post->content}}</p>

                               <div class="info_post d-flex justify-content-between">
                                   <div class="date">{{$post->updated_at}}</div>

                                   <div class="published">
                                       @if ($post->published)
                                            <span class="badge badge-success">Publicato</span>
                                       @else
                                            <span class="badge badge-secondary">Non Publicato</span>
                                       @endif
                                   </div>
                               </div>
                           </li>
                       @endforeach
                   </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection