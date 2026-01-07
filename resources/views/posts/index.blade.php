@extends('plantilla')

@section('titulo', 'Llistat posts')

@section('contenido')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Llistat de posts</h1>
    @auth
    <a href="{{ route('posts.create') }}" class="btn btn-success">
        <i class="bi bi-plus-lg"></i> Crear Nou Post
    </a>
    @endauth
</div>

@if($posts->count() > 0)
<div class="row">
    @foreach ($posts as $post)
    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $post->titulo }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    {{ $post->usuari ? $post->usuari->name : 'Autor desconegut' }}
                </h6>
                <p class="card-text flex-grow-1">
                    {{ Str::limit($post->contingut, 100) }}
                </p>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">Llegir més</a>
                    @if(Auth::id() === $post->usuari_id)
                    <div class="btn-group">
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-secondary btn-sm">Editar</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Estàs segur?')">Eliminar</button>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
            <div class="card-footer text-muted text-end" style="font-size: 0.8rem;">
                {{ $post->created_at->format('d/m/Y') }}
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="d-flex justify-content-center mt-4">
    {{ $posts->links() }}
</div>
@else
<div class="alert alert-info">
    No hi ha posts disponibles.
</div>
@endif
@endsection