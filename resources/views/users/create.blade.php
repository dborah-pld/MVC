@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Création d'une fiche utilisateur</div>

                <div class="card-body">

                    <form action="{{ route('users.store') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label for="name">Nom</label>
                        <input id="name" type="text" name="name" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="name">E-mail</label>
                        <input id="email" type="text" name="email" class="form-control">
                      </div>
                        <br>
                        <button class="btn btn-success" type="submit">Enregistrer</button>

                    </form>

                    <br>
                    <a href="{{ route('home') }}" class="btn btn-danger" title="Retour a la home">Retour a la home</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
