@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Création d'une fiche licorne</div>

                <div class="card-body">

                    <form action="{{ route('licornes.store') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label for="name">Nom</label>
                        <input id="name" type="text" name="name" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="tourniquet">Garrot (en cm)</label>
                        <input id="tourniquet" type="text" name="tourniquet" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="birth_date">Date de naissance</label>
                        <input id="birth_date" type="date" name="birth_date" class="form-control" placeholder="yyyy-mm-dd sur Safari">
                      </div>
                      <div class="form-group">
                        <label for="birth_place">Lieu de naissance</label>
                        <input id="birth_place" type="text" name="birth_place" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="mane_color">Couleur de la crinière</label>
                        <input id="mane_color" type="text" name="mane_color" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="sex">Genre</label>
                        <input id="sex" type="boolean" name="sex" class="form-control" placeholder="0 = femelle, 1 = mâle">
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
