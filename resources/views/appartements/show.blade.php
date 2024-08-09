@extends('base')

@section('content')
<h1>Détails du Bâtiment</h1>
<div>
    <strong>Nom:</strong> {{ $batiment->nom }}
</div>
<div>
    <strong>ville:</strong> {{ $batiment->ville }}
</div>
<div>
    <strong>Description:</strong> {{ $batiment->description }}
</div>
<a href="{{ route('appartements.index') }}" class="btn btn-warning" >Retour</a>
@endsection 
