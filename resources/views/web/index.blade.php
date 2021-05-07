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

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel"><img src="{{asset('images/logo-modal.png')}}" alt="logo modal" class="img-fluid figure-img logo-modal"></h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
         <div class="row">
            <div class="col-md-6">
               <span class="bienvenido">bienvenido</span>
               <p class="info">Ingresa la siguiente información: </p>
               <form action="">
                  <div class="mb-3">
                     <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="CORREO ELECTRÓNICO">
                   </div>
                   <div class="mb-3">
                     <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="CORREO ELECTRÓNICO">
                   </div>
                   <div class="row">
                      <div class="col-md-6">
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                           <label class="form-check-label" for="flexCheckDefault">
                              Mantenerme logueado
                           </label>
                         </div>
                      </div>
                      <div class="col-md-6">
                         <p>Recordar contraseña</p>
                      </div>
                   </div>
                   <div class="row">
                     <div class="col-md-6">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">INICIAR SESIÓN</button>
                     </div>
                     <div class="col-md-6">
                        <button type="button" class="btn btn-primary">REGISTRARSE</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-md-6">
               Te invitamos a ser Maestro FG donde tendr&aacute;s acceso a informaci&oacute;n privilegiada a 
               precios de ganado bovino y porcino, subproductos, toda la trazabilidad de tus procesos en l&iacute;nea y 
               un mundo de informaci&oacute;n como apoyo en la toma de decisiones para el desarrollo de tus negocios.
               <div class="btn-col-2">
                  Conozca el proceso de como ser Maestro FG
               </div>
            </div>
         </div>
       </div>
       <div class="modal-footer">
         {{-- **** --}}
       </div>
     </div>
   </div>
 </div>
@endsection