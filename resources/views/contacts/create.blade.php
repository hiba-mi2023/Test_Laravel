@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un Contact</h1>
   
    <form method="POST" action="{{ route('contacts.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Nom :</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="phone">Téléphone :</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ old('phone') }}" required>
            @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
    <div>
        @if(session()->has('success'))
            <h1>{{ session()->get('success') }}</h1>
        @endif
    </div>    
    <a href="{{ route('contacts.index') }}" class="btn btn-secondary mt-2">Voir les Contacts</a>
</div>
@endsection
