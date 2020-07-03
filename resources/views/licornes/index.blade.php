@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des Licornes</div>

                <div class="card-body">

                    <ul class="list-group my-2">
                        @foreach($licornes as $licorne)
                            <li class="list-group-item list-group-item-action">
                              <a class="text-dark" href="{{ route('licornes.show', $licorne->id) }}" title="{{ $licorne->name }}">🦄 {{ $licorne->name }}</a>
                            </li>
                        @endforeach
                    </ul>

                    <a href="{{ route('home') }}" class="btn btn-secondary" title="Retour sur la page d'accueil">Retour sur la page d'accueil</a>

                    <a href="{{ route('licornes.create') }}" class="btn btn-success" title="Ajouter une licorne">Ajouter une fiche licorne</a>

                    <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
