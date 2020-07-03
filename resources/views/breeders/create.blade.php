@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Création d'une fiche élevage</div>

                <div class="card-body">

                    <form action="{{ route('breeders.store') }}" method="POST">
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
                          <label for="reference">référence élevage</label>
                          <input id="reference" type="string" name="reference" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="reproduction_date1">1ère période de reproduction :</label>
                          <input id="reproduction_date1" type="date" name="reproduction_date1" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="reproduction_date2">2ème période de reproduction :</label>
                          <input id="reproduction_date2" type="date" name="reproduction_date2" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="is_pregnant">La licorne est actuellement enceinte (0 = non, 1 = oui)</label>
                          <input id="is_pregnant" type="boolean" name="is_pregnant" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="nb_childs">Nombre de bébés licornets</label>
                          <input id="nb_childs" type="number" name="nb_childs" class="form-control">
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
