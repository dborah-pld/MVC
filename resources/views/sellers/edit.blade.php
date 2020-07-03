@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modification d'une fiche vente</div>

                <div class="card-body">

                    <form action="{{ route('sellers.update', $seller_sheet->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                          <select name="user_id">
                              @foreach($users as $user)
                                  <option {{ $user->id == $seller_sheet->seller_id ? 'selected' : '' }} value="{{ $user->id }}">{{ $user->name }}</option>
                              @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <select name="licorne_id">
                              @foreach($licornes as $licorne)
                                  <option {{ $licorne->id == $seller_sheet->unicorn_id ? 'selected' : '' }} value="{{ $licorne->id }}">{{ $licorne->name }}</option>
                              @endforeach
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="references">Reference</label>
                          @if(!is_null($seller_sheet->references))
                              <input id="references" type="text" name="references" value="{{ $seller_sheet->references }}" class="form-control">
                          @else
                              <input id="references" type="text" name="references" class="form-control">
                          @endif
                        </div>
                        <div class="form-group">
                          <label for="price">Prix (en €)</label>
                          @if(!is_null($seller_sheet->price))
                              <input id="price" type="text" name="price" value="{{ $seller_sheet->price }}" class="form-control">
                          @else
                              <input id="price" type="text" name="price" class="form-control">
                          @endif
                        </div>
                        <div class="form-group">
                          <label for="sell_place">Lieu de vente</label>
                          @if(!is_null($seller_sheet->sell_place))
                              <input id="sell_place" type="text" name="sell_place" value="{{ $seller_sheet->sell_place }}" class="form-control">
                          @else
                              <input id="sell_place" type="text" name="sell_place" class="form-control">
                          @endif
                        </div>


                        <button class="btn btn-primary" type="submit">Envoyer</button>
                    </form>
                    <a class="btn btn-success mt-2" href="{{ route('sellers.index') }}">Retour a la liste</a>

                    <a href="{{ route('home') }}" class="btn btn-danger mt-2" title="Retour a la home">Retour a la home</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
