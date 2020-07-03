@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Création d'une fiche vente</div>

                <div class="card-body">

                    <form action="{{ route('sellers.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                          <select name="user_id">
                              @foreach($users as $user)
                                  <option value="{{ $user->id }}">{{ $user->name }}</option>
                              @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <select name="licorne_id">
                              @foreach($licornes as $licorne)
                                  <option value="{{ $licorne->id }}">{{ $licorne->name }}</option>
                              @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="references">Reference</label>
                          <input id="refenrences" type="text" name="references" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="price">Prix (en €)</label>
                          <input id="price" type="number" name="price" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="sell_place">Lieu de vente</label>
                          <input id="sell_place" type="text" name="sell_place" class="form-control">
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
