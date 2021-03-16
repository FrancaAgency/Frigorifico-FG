@extends('dashboard.master')
@section('content')

        @csrf
        <div class="form-group">
            <label for="title">Titulo</label>
            <input readonly type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="url_clean">Url limpia</label>
            <input readonly type="text" class="form-control" name="url_clean" id="url_clean" value="{{ $post->url_clean }}">
            @error('url_clean')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-floating">
            <label for="content">Contenido</label>
            <textarea readonly class="form-control" placeholder="Deja un comentario aqui" id="content" rows="3" name="content">{{$post->content }}</textarea>
            @error('content')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <br>
        
@endsection

