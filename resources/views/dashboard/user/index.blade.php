@extends('dashboard.master')
@section('content')
<a href="{{ route('user.create') }}" class="btn btn-success mt-3 mb-3"> Crear nuevo usuario </a>
<table class="table  table-striped">
    <thead>
        <tr>
            <td>
                Id
            </td>
            <td>
                Nombre
            </td>
            <td>
                Apellido
            </td>
            <td>
              Email
            </td>
            <td>
              Rol
            </td>
            <td>
                Fecha de actualizacion
            </td>
            <td>
                Acciones
            </td>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $i)
        <tr>
            <td>
              {{   $i->id }}
            </td>
            <td>
                {{   $i->name }}
            </td>
            <td>
              {{   $i->surname }}
          </td>
          <td>
            {{   $i->email}}
        </td>
        <td>
          {{   $i->rol->key }}
      </td>
            <td>
                {{   $i->created_at ->format('d-M-Y') }}
            </td>
            <td>
                {{   $i->updated_at ->format('d-M-Y') }}
            </td>
            <td>
                <a href="{{ route('user.show',$i->id) }}" class="btn btn-info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                      </svg>
                </a>
            </td>
            <td> 
                <a href="{{ route('user.edit',$i->id) }}" class="btn btn-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                        <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                      </svg>
                </a>
            </td>
            <td> 
              <button class="btn btn-danger"   data-toggle="modal" data-target="#deleteModal" data-id="{{ $i->id }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                </svg>
              </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $users->links() }}

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>¿Seguro que desea borrar el registro seleccionado?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <form id="formDelete" method="POST" action="{{ route('category.destroy',0)}}" data-action="{{ route('category.destroy',0)}}">
          @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Borrar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
 window.onload = function(){
  $('#deleteModal').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id')
  action  = $('#formDelete').attr('data-action').slice(0,-1);
  action += id;
  console.log(action);
  $('#formDelete').attr('action',action);
  var modal = $(this)
  modal.find('.modal-title').text('Borrar Registro ' + id)
})
 }
</script>
@endsection
