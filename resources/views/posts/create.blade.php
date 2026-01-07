@extends('plantilla')

@section('titulo', 'Crear Nou Post')

@section('contenido')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h2 class="h4 mb-0">Crear Nou Post</h2>
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Títol</label>
                        <input type="text" name="titulo" id="titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo') }}" required>
                        @error('titulo')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="contingut" class="form-label">Contingut</label>
                        <textarea name="contingut" id="contingut" class="form-control @error('contingut') is-invalid @enderror" rows="8" required>{{ old('contingut') }}</textarea>
                        @error('contingut')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="{{ route('posts.index') }}" class="btn btn-secondary me-2">Cancel·lar</a>
                        <button type="submit" class="btn btn-primary">Crear Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection