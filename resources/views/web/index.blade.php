@extends('web.master')

@section('content')
    <div class="container">
       <div class="row">
          <div class="col-md-3" v-for="post in posts">
               <figure class="figure">
                     <img v-bind:src=" '/images/' + post.images" class="card-img-top" alt="...">
               </figure>
               <figcaption>
                  <p class="texto">@{{post.content}}</p>
               </figcaption>
          </div>
       </div> 
    </div>
@endsection