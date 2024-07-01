{{-- <!DOCTYPE html>
<html>
<head>
    <title>Éditer le Contact</title>
</head>
<body>
    <h1>Éditer le Contact</h1>
    <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
        @csrf
        @method('PUT')
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" value="{{ $contact->name }}" required>
        <label for="phone">Téléphone :</label>
        <input type="text" name="phone" id="phone" value="{{ $contact->phone }}" required>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" value="{{ $contact->email }}" required>
        <button type="submit">Mettre à jour</button>
    </form>
    <a href="{{ route('contacts.index') }}">Annuler</a>
</body>
</html> --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Éditer le Contact</h1>
    {{-- <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nom :</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $contact->name }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Téléphone :</label>
            <input type="text" class="form-control" name="phone" id="phone" value="{{ $contact->phone }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ $contact->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
        <a href="{{ route('contacts.index') }}" class="btn btn-secondary ml-2">Annuler</a>
    </form> --}}
    <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nom :</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name', $contact->name) }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="phone">Téléphone :</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ old('phone', $contact->phone) }}" required>
            @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email', $contact->email) }}" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
        <a href="{{ route('contacts.index') }}" class="btn btn-secondary ml-2">Annuler</a>
    </form>
     
</div>
@endsection

