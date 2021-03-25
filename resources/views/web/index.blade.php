@extends('web.master')
@section('content')
  <h1>Contenido Inicial</h1>
  @{{message}}
  
  <div class="card" style="width: 18rem;" v-for="post in posts ">
    <img v-bind:src=" '/images/' + post.images" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> @{{post.title}}</h5>
    <p class="card-text">@{{post.content}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
@endsection