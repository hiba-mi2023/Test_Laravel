@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails du Contact</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $contact->name }}</h5>
            <p class="card-text"><strong>Téléphone :</strong> {{ $contact->phone }}</p>
            <p class="card-text"><strong>Email :</strong> {{ $contact->email }}</p>
            <a href="{{ route('contacts.index') }}" class="btn btn-primary">Retour à la liste</a>
            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning">Éditer</a>
        </div>
    </div>
</div>
@endsection

