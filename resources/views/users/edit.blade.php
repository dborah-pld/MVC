@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modification d'un utilisateur</div>

                <div class="card-body">

                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="name">Nom</label>
                          @if(!is_null($user->name))
                              <input id="name" type="text" name="name" value="{{ $user->name }}" class="form-control">
                          @else
                              <input id="name" type="text" name="name" class="form-control">
                          @endif
                        </div>
                        <div class="form-group">
                          <label for="email">E-mail</label>
                          @if(!is_null($user->email))
                              <input id="email" type="text" name="email" value="{{ $user->email }}" class="form-control">
                          @else
                              <input id="email" type="text" name="email" class="form-control">
                          @endif
                        </div>


                        <button class="btn btn-primary" type="submit">Envoyer</button>
                    </form>
                    <a class="btn btn-success mt-2" href="{{ route('users.index') }}">Retour a la liste</a>

                    <a href="{{ route('home') }}" class="btn btn-danger mt-2" title="Retour a la home">Retour a la home</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
