@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Fiche élevage référence {{ $breeder_sheet->reference }}</div>

                <div class="card-body">

                  <div class="card bg-light mb-3">
                    <div class="card-header font-weight-bold text-uppercase">{{ $breeder_sheet->reference }}</div>
                    <div class="card-body text-info p-0">
                      <table class="table m-0">
                        <tbody>
                          <tr>
                            <th scope="row">1ère période de reproduction</th>
                            <td>{{ $breeder_sheet->reproduction_date1 }}</td>
                          </tr>
                          <tr>
                            <th scope="row">2ème période de reproduction</th>
                            <td>{{ $breeder_sheet->reproduction_date2 }}</td>
                          </tr>
                          <tr>
                            <th scope="row">Licorne enceinte (0 = non, 1 = oui)</th>
                            <td>{{ $breeder_sheet->is_pregnant }}</td>
                          </tr>
                          <tr>
                            <th scope="row">Nombre de bébés licornets</th>
                            <td>{{ $breeder_sheet->nb_childs }}</td>
                          </tr>
                          <tr>
                        </tbody>
                      </table>


                    </div>
                  </div>


                    <a class="btn btn-success mb-2" href="{{ route('breeders.index') }}">Retour a la liste</a>

                    <a class="btn btn-primary mb-2" href="{{ route('breeders.edit', $breeder_sheet->id) }}">Modifier</a>

                    <form action="{{ route('breeders.destroy') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{ $breeder_sheet->id }}">
                        <button class="btn btn-danger" type="submit">Supprimer</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
