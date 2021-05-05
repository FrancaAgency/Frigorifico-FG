@extends('web.master')

@section('content')
    <div class="container">
       <div class="row">
          <div class="col-md-12">
              <video muted loop autoplay class="video">
                  <source src="{{asset('images/videos/vid1.mp4')}}" type="video/mp4">
                  <source src="movie.ogg" type="video/ogg">
                  Your browser does not support the video tag.
              </video>
          </div>
       </div>
       <div class="row">
          <div class="col-md-3" v-for="post in posts">
               <figure class="figure">
                     <img v-bind:src=" '/images/' + post.images" class="img figure-img img-fluid" alt="...">
               </figure>
               <figcaption>
                  <p class="texto">@{{post.content}}</p>
               </figcaption>
          </div>
       </div> 
    </div>
@endsection