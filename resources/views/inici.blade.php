@extends('plantilla')

@section('titulo', 'Inici')

@section('contenido')
    <h1>Pàgina d'inici</h1>
    <div class="card text-center">
        <div class="card-header">
            Benvingut al blog
        </div>
        <div class="card-body">
            <h5 class="card-title">
                Informacio sobre la pagina
            </h5>
            <p class="card-text">
                Esta pagina permet la publicacio de posts desde un conter ja registrat en la base de dades.
            </p>
            <h5 class="card-title">
                Informacio per als no registrats
            </h5>
            <ol class="list-group list-group-numbered">
                <li class="list-group-item">
                    No tens conter aixina que soles podras vore els posts creats per els usuaris reals
                </li>
                <li class="list-group-item">
                    Si vols un conter tens que contactar amb el administrador
                </li>
            </ol>
        </div>
    </div>
    

@endsection