@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Fiche vente référence {{ $seller_sheet->references }}</div>

                <div class="card-body">

                  <div class="card bg-light mb-3">
                    <div class="card-header font-weight-bold text-uppercase">{{ $seller_sheet->references }}</div>
                    <div class="card-body text-info p-0">
                      <table class="table m-0">
                        <tbody>
                          <tr>
                            <th scope="row">Prix</th>
                            <td>{{ $seller_sheet->price }} €</td>
                          </tr>
                          <tr>
                            <th scope="row">Lieu de vente</th>
                            <td>{{ $seller_sheet->sell_place }}</td>
                          </tr>
                          <tr>
                        </tbody>
                      </table>


                    </div>
                  </div>


                    <a class="btn btn-success mb-2" href="{{ route('sellers.index') }}">Retour a la liste</a>

                    <a class="btn btn-primary mb-2" href="{{ route('sellers.edit', $seller_sheet->id) }}">Modifier</a>

                    <form action="{{ route('sellers.destroy') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{ $seller_sheet->id }}">
                        <button class="btn btn-danger" type="submit">Supprimer</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
