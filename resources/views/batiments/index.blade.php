@extends('base')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> liste des batiments</h3>
                        <div class="card-tools">
                            <ul class="nav nav-pills ml-auto">
                                <li class="nav-item">
                                    <button type="submit"><a href ="/batiments/create"> Ajouter un nouveau
                                            batiment</a></button>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>ville</th>
                                    <th>Description</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($batiments as $batiment)
                                    <tr>
                                        <div>
                                            <td>{{ $batiment->nom }}</td>
                                            <td>{{ $batiment->ville }}</td>
                                            <td>{{ $batiment->description }}</td>
                                        </div>
                                        <td class="text-right">
                                            <a class="btn btn-warning"
                                                href="{{ route('batiments.show', $batiment->id) }}">Voir</a>
                                            <a class="btn btn-success"
                                                href="{{ route('batiments.edit', $batiment->id) }}">Modifier</a>
                                            <form action="{{ route('batiments.destroy', $batiment->id) }}" method="POST"
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
                    <div class="card-header">
                        <div class="card-tools">
                            <ul class="nav nav-pills ml-auto">
                                <li class="nav-item">
                                    <button type="submit"><a href ="/batiments/create"> Ajouter un nouveau
                                            batiment</a></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

    </div>
@endsection
