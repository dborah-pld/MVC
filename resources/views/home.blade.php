@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('licornes.index') }}" class="btn btn-dark" title="Gérer les licornes">Gérer les licornes 🦄</a>
                    <a href="{{ route('users.index') }}" class="btn btn-dark" title="Gérer les utilisateurs">Gérer les utilisateurs 👤</a>
                    <a href="{{ route('sellers.index') }}" class="btn btn-dark" title="Gérer les utilisateurs">Gérer les ventes 💰</a>
                    <a href="{{ route('breeders.index') }}" class="btn btn-dark" title="Gérer les utilisateurs">Gérer les élevages 👨‍🌾</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
