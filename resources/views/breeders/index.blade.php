@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des élevages</div>

                <div class="card-body">

                    <table class="table">

                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Référence</th>
                          <th scope="col">Eleveur</th>
                          <th scope="col">Licorne</th>
                          <th scope="col">Périodes de reproduction</th>
                          <th scope="col">Licorne enceinte</th>
                          <th scope="col">Nombre de licornets</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($breeders_sheet as $breeder_sheet)
                        <tr>
                          <th scope="row"><a href="{{ route('breeders.show', $breeder_sheet->id) }}" title="{{ $breeder_sheet->name }}">{{ $breeder_sheet->reference }}</a></th>
                          @if(!is_null($breeder_sheet->breeder) && !is_null($breeder_sheet->breeder->name))
                          <td>{{ $breeder_sheet->breeder->name }}</td>
                          @else
                          <td></td>
                          @endif
                          @if(!is_null($breeder_sheet->licorne) && !is_null($breeder_sheet->licorne->name))
                          <td>{{ $breeder_sheet->licorne->name }}</td>
                          @else
                          <td></td>
                          @endif
                          @if(!is_null($breeder_sheet->reproduction_date1 && $breeder_sheet->reproduction_date2))
                          <td>{{ $breeder_sheet->reproduction_date1 }} <br> {{ $breeder_sheet->reproduction_date2 }}</td>
                          @else
                          <td></td>
                          @endif
                          @if(!is_null($breeder_sheet->is_pregnant))
                          <td>{{ $breeder_sheet->is_pregnant }}</td>
                          @else
                          <td></td>
                          @endif
                          @if(!is_null($breeder_sheet->nb_childs))
                          <td>{{ $breeder_sheet->nb_childs }}</td>
                          @else
                          <td></td>
                          @endif
                        </tr>
                        @endforeach
                      </tbody>

                    </table>

                    <a href="{{ route('home') }}" class="btn btn-secondary" title="Retour sur la page d'accueil">Retour sur la page d'accueil</a>

                    <a href="{{ route('breeders.create') }}" class="btn btn-success" title="Ajouter une fiche élevage">Ajouter une élevage</a>

                    <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
