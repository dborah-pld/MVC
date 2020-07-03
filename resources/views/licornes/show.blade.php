@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Fiche descriptive : {{ $licorne->name }}</div>

                <div class="card-body">

                  <div class="card bg-light mb-3">
                    <div class="card-header font-weight-bold text-uppercase">🦄 {{ $licorne->name }}</div>
                    <div class="card-body text-info p-0">
                      <table class="table m-0">
                        <tbody>
                          <tr>
                            <th scope="row">Garrot</th>
                            <td>{{ $licorne->tourniquet }} cm</td>
                          </tr>
                          <tr>
                            <th scope="row">Date de naissance</th>
                            <td>{{ $licorne->birth_date }}</td>
                          </tr>
                          <tr>
                            <th scope="row">Lieu de naissance</th>
                            <td>{{ $licorne->birth_place }}</td>
                          </tr>
                          <tr>
                            <th scope="row">Couleur crinière</th>
                            <td>{{ $licorne->mane_color }}</td>
                          </tr>
                          <tr>
                            <th scope="row">Genre<br>(0 = femelle, 1 = mâle)</th>
                            <td>{{ $licorne->sex }}</td>
                          </tr>
                        </tbody>
                      </table>


                    </div>
                  </div>


                    <a class="btn btn-success mb-2" href="{{ route('licornes.index') }}">Retour a la liste</a>

                    <a class="btn btn-primary mb-2" href="{{ route('licornes.edit', $licorne->id) }}">Modifier</a>

                    <form action="{{ route('licornes.destroy') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{ $licorne->id }}">
                        <button class="btn btn-danger" type="submit">Supprimer</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
