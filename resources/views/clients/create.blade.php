@extends('layout')

@section('content')
<h1>Creer un nouvequ client</h1>
<form method="POST" action="/clients">
    @csrf

    <div class="form-group">
        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="pseudo" name="name">
        @error('name')
            <div class="invalid-feedback">
                {{ $errors->first('name') }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="email" name="email">
        @error('email')
            <div class="invalid-feedback">
                {{ $errors->first('email') }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <select class="custom-select @error('status') is-invalid @enderror" name="status">
            <option value="1">Actif</option>
            <option value="0">Inactif</option>
        </select>
        @error('status')
            <div class="invalid-feedback">
                {{ $errors->first('status') }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <select class="custom-select @error('entreprise_id') is-invalid @enderror" name="entreprise_id">
            @foreach($entreprises as $entreprise)
            <option value="{{ $entreprise->id }}">{{ $entreprise->name }}</option>
            @endforeach
        </select>
        @error('entreprise_id')
            <div class="invalid-feedback">
                {{ $errors->first('entreprise_id') }}
            </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">ajouter le client</button>
</form>
@endsection