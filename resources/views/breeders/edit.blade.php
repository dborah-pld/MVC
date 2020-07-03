@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modification d'une fiche éleveur</div>

                <div class="card-body">

                    <form action="{{ route('breeders.update', $breeder->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                          <select name="user_id">
                              @foreach($users as $user)
                                  <option {{ $user->id == $breeder->breeder_id ? 'selected' : '' }} value="{{ $user->id }}">{{ $user->name }}</option>
                              @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <select name="licorne_id">
                              @foreach($licornes as $licorne)
                                  <option {{ $licorne->id == $breeder->unicorn_id ? 'selected' : '' }} value="{{ $licorne->id }}">{{ $licorne->name }}</option>
                              @endforeach
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="reference">référence élevage</label>
                          @if(!is_null($breeder->reference))
                              <input id="reference" type="string" name="reference" value="{{ $breeder->reference }}" class="form-control">
                          @else
                              <input id="reference" type="string" name="reference" class="form-control">
                          @endif
                        </div>
                        <div class="form-group">
                          <label for="reproduction_date1">1ère période de reproduction :</label>
                          @if(!is_null($breeder->reproduction_date1))
                              <input id="reproduction_date1" type="date" name="reproduction_date1" value="{{ $breeder->reproduction_date1 }}" class="form-control">
                          @else
                              <input id="reproduction_date1" type="date" name="reproduction_date1" class="form-control">
                          @endif
                        </div>
                        <div class="form-group">
                          <label for="reproduction_date2">2ème période de reproduction :</label>
                          @if(!is_null($breeder->reproduction_date2))
                              <input id="reproduction_date2" type="date" name="reproduction_date2" value="{{ $breeder->reproduction_date2 }}" class="form-control">
                          @else
                              <input id="reproduction_date2" type="date" name="reproduction_date2" class="form-control">
                          @endif
                        </div>
                        <div class="form-group">
                          <label for="is_pregnant">La licorne est actuellement enceinte (0 = non, 1 = oui)</label>
                          @if(!is_null($breeder->is_pregnant))
                              <input id="is_pregnant" type="boolean" name="is_pregnant" value="{{ $breeder->is_pregnant }}" class="form-control">
                          @else
                              <input id="is_pregnant" type="boolean" name="is_pregnant" class="form-control">
                          @endif
                        </div>
                        <div class="form-group">
                          <label for="nb_childs">Nombre de bébés licornets</label>
                          @if(!is_null($breeder->nb_childs))
                              <input id="nb_childs" type="number" name="nb_childs" value="{{ $breeder->nb_childs }}" class="form-control">
                          @else
                              <input id="nb_childs" type="number" name="nb_childs" class="form-control">
                          @endif
                        </div>


                        <button class="btn btn-primary" type="submit">Envoyer</button>
                    </form>
                    <a class="btn btn-success mt-2" href="{{ route('breeders.index') }}">Retour a la liste</a>

                    <a href="{{ route('home') }}" class="btn btn-danger mt-2" title="Retour a la home">Retour a la home</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
