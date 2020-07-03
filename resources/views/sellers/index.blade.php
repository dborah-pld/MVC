@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des ventes</div>

                <div class="card-body">

                    <table class="table">

                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Référence</th>
                          <th scope="col">Vendeur</th>
                          <th scope="col">Licorne</th>
                          <th scope="col">Prix</th>
                          <th scope="col">Lieu de vente</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($sellers_sheet as $seller_sheet)
                        <tr>
                          <th scope="row"><a href="{{ route('sellers.show', $seller_sheet->id) }}" title="{{ $seller_sheet->name }}">{{ $seller_sheet->references }}</a></th>
                          @if(!is_null($seller_sheet->seller) && !is_null($seller_sheet->seller->name))
                          <td>{{ $seller_sheet->seller->name }}</td>
                          @else
                          <td></td>
                          @endif
                          @if(!is_null($seller_sheet->licorne) && !is_null($seller_sheet->licorne->name))
                          <td>{{ $seller_sheet->licorne->name }}</td>
                          @else
                          <td></td>
                          @endif
                          @if(!is_null($seller_sheet->price))
                          <td>{{ $seller_sheet->price }} €</td>
                          @else
                          <td></td>
                          @endif
                          @if(!is_null($seller_sheet->sell_place))
                          <td>{{ $seller_sheet->sell_place }}</td>
                          @else
                          <td></td>
                          @endif
                        </tr>
                        @endforeach
                      </tbody>

                    </table>

                    <a href="{{ route('home') }}" class="btn btn-secondary" title="Retour sur la page d'accueil">Retour sur la page d'accueil</a>

                    <a href="{{ route('sellers.create') }}" class="btn btn-success" title="Ajouter une fiche vente">Ajouter une vente</a>

                    <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
