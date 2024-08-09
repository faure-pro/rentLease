@extends('base')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> liste des chambres</h3>
                        <div class="card-tools">
                            <ul class="nav nav-pills ml-auto">
                                <li class="nav-item">
                                    <button type="submit"><a href ="/batiments/create"> Ajouter une nouvelles
                                            chambres</a></button>
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
                                <th>Numero</th>
                                <th>dimension</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($chambres as $chambre)
                                <tr>
                                    <div>
                                        <td>{{ $chambre->numero }}</td>
                                        <td>{{ $chambre->dimension }}</td>
                                        <td>{{ $chambre->description }}</td>
                                    </div>
                                    <td class="text-right">
                                        <a href="{{ route('chambres.show', $chambre->id) }}">Voir</a>
                                        <a class="btn btn-success"
                                            href="{{ route('chambres.edit', $chambre->id) }}">Modifier</a>
                                        <form action="{{ route('chambres.destroy', $chambre->id) }}" method="POST"
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
