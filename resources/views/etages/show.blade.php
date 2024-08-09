@extends('base')

@section('content')
<h1>Détails de l'etage</h1>
<div>
    <strong>Numero:</strong> {{ $etage->nom }}
</div>
<div>
    <strong>Nombre d'appartement:</strong> {{ $etage->ville }}
</div>
<div>
    <strong>Description:</strong> {{ $etage->description }}
</div>
<a href="{{ route('batiments.index') }}" class="btn btn-warning" >Retour</a>
@endsection 
