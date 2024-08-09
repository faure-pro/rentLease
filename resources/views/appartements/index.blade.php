@extends('base')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> liste des appartements</h3>
                        <div class="card-tools">
                            <ul class="nav nav-pills ml-auto">
                                <li class="nav-item">
                                    <button type="submit"><a href ="/appartements/create"> Ajouter un nouveau
                                            appartement</a></button>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.card-header -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>NombreDeChambres</th>
                                <th>Prix</th>
                                <th>Disponibilite</th>
                            </tr>
                        </thead>
                        <tbody>    
                            @foreach ($appartements as $appartement)
                                <tr>
                                    <div>
                                    <td>{{ $batiment->nom }}</td>
                                    <td>{{ $batiment->nombreDeChambres }}</td>
                                    <td>{{ $batiment->prix }}</td>
                                    <td>{{ $batiment->disponibilite }}</td>
                                </div>
                                    <td class="text-right">
                                        <a class="btn btn-warning"href="{{ route('appartements.show', $appartement->id) }}">Voir</a>
                                        <a class="btn btn-success" href="{{ route('appartements.edit', $appartement->id) }}">Modifier</a>
                                        <form action="{{ route('appartements.destroy', $appartement->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>

        </div>
    @endsection
    
                        