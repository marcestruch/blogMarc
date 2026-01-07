@extends('plantilla')

@section('titulo', $post->titulo)

@section('contenido')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
                <h1 class="h3 mb-0">{{ $post->titulo }}</h1>
                <span class="badge bg-secondary">{{ $post->created_at->format('d/m/Y') }}</span>
            </div>
            <div class="card-body">
                <div class="mb-4">
                    <p class="card-text" style="white-space: pre-wrap;">{{ $post->contingut }}</p>
                </div>

                <hr>

                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <strong>Autor:</strong> {{ $post->usuari ? $post->usuari->name : 'Desconegut' }}
                    </div>
                    <div>
                        <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary me-2">Tornar</a>
                        @if(Auth::id() === $post->usuari_id)
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Editar</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection