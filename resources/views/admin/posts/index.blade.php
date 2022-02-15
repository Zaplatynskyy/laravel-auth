@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts List</div>

                <div class="card-body">
                   <ul>
                       @foreach ($posts as $post)
                           <li>
                               <h2>{{$post->title}}</h2>
                               <p>{{$post->content}}</p>
                           </li>
                       @endforeach
                   </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection