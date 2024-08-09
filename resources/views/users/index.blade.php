@extends('base')

@section('content')
    <div class="container">
        <h1>Liste des Utilisateurs</h1>
        <a href="{{ route('users.create') }}" class="btn btn-primary">Ajouter un Utilisateur</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Tel</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $utilisateur->id }}</td>
                        <td>{{ $utilisateur->nom }}</td>
                        <td>{{ $utilisateur->prenom }}</td>
                        <td>{{ $utilisateur->email }}</td>
                        <td>{{ $utilisateur->tel }}</td>
                        <td>
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">Voir</a>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
