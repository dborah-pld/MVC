@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modification d'une fiche Licorne</div>

                <div class="card-body">

                    <form action="{{ route('licornes.update', $licorne->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="name">Nom</label>
                          @if(!is_null($licorne->name))
                              <input id="name" type="text" name="name" value="{{ $licorne->name }}" class="form-control">
                          @else
                              <input id="name" type="text" name="name" class="form-control">
                          @endif
                        </div>
                        <div class="form-group">
                          <label for="tourniquet">Garrot (en cm)</label>
                          @if(!is_null($licorne->tourniquet))
                              <input id="tourniquet" type="text" name="tourniquet" value="{{ $licorne->tourniquet }}" class="form-control">
                          @else
                              <input id="tourniquet" type="text" name="tourniquet" class="form-control">
                          @endif
                        </div>
                        <div class="form-group">
                          <label for="birth_date">Date de naissance</label>
                          @if(!is_null($licorne->birth_date))
                              <input id="birth_date" type="date" name="birth_date" value="{{ $licorne->birth_date }}" class="form-control" placeholder="yyyy-mm-dd sur Safari">
                          @else
                              <input id="birth_date" type="date" name="birth_date" class="form-control" placeholder="yyyy-mm-dd sur Safari">
                          @endif
                        </div>
                        <div class="form-group">
                          <label for="birth_place">Lieu de naissance</label>
                          @if(!is_null($licorne->tourniquet))
                              <input id="birth_place" type="text" name="birth_place" value="{{ $licorne->birth_place }}" class="form-control">
                          @else
                              <input id="birth_place" type="text" name="birth_place" class="form-control">
                          @endif
                        </div>
                        <div class="form-group">
                          <label for="mane_color">Couleur de la crinière</label>
                          @if(!is_null($licorne->tourniquet))
                              <input id="mane_color" type="text" name="mane_color" value="{{ $licorne->mane_color }}" class="form-control">
                          @else
                              <input id="mane_color" type="text" name="mane_color" class="form-control">
                          @endif
                        </div>
                        <div class="form-group">
                          <label for="sex">Genre</label>
                          @if(!is_null($licorne->tourniquet))
                              <input id="sex" type="boolean" name="sex" value="{{ $licorne->sex }}" class="form-control" placeholder="0 = femelle, 1 = mâle">
                          @else
                              <input id="sex" type="boolean" name="sex" class="form-control" placeholder="0 = femelle, 1 = mâle">
                          @endif
                        </div>


                        <button class="btn btn-primary" type="submit">Envoyer</button>
                    </form>
                    <a class="btn btn-success mt-2" href="{{ route('licornes.index') }}">Retour a la liste</a>

                    <a href="{{ route('home') }}" class="btn btn-danger mt-2" title="Retour a la home">Retour a la home</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
