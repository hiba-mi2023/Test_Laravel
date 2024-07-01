@extends('layouts.app')
<div>
    @if(session()->has('success'))
        <p class="alert alert-success mt-3" id="successMessage">{{ session()->get('success') }}</p>
    @endif
</div>
@section('content')
<div class="container">
    <h1>Liste des Contacts</h1>
    <a href="{{ route('contacts.create') }}" class="btn btn-success mb-3">Ajouter un Contact</a>
    <ul class="list-group">
        @foreach ($contacts as $contact)
            <li class="list-group-item">
                <span>{{ $contact->name }} - {{ $contact->phone }} - {{ $contact->email }}</span>
                <div class="float-right">
                    <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info btn-sm mr-2">Voir</a>
                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning btn-sm mr-2">Éditer</a>
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
<script>
    // Hide success message after 5 seconds (5000 milliseconds)
    setTimeout(function() {
        document.getElementById('successMessage').style.display = 'none';
    }, 5000);
</script>
@endsection

