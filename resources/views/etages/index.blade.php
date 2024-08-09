@extends('base')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> liste des etages</h3>
                        <div class="card-tools">
                            <ul class="nav nav-pills ml-auto">
                                <li class="nav-item">
                                    <button type="submit"><a href ="/etages/create"> AJOUTER UN NOUVEL
                                            ETAGE</a></button>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.card-header -->
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Numero</th>
                                    <th>nombreAppartements</th>
                                    <th>Description</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($etages as $etage)
                                    <tr>
                                        <div>
                                            <td>{{ $etage->nom }}</td>
                                            <td>{{ $etage->nombreAppartements }}</td>
                                            <td>{{ $etage->description }}</td>
                                        </div>
                                        <td class="text-right">
                                            <a class="btn btn-warning" href="{{ route('etages.show', $etage->id) }}">Voir</a>
                                            <a class="btn btn-success"
                                                href="{{ route('etages.edit', $etage->id) }}">Modifier</a>
                                            <form action="{{ route('etages.destroy', $etage->id) }}" method="POST"
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
                                    <button type="submit"><a href ="/batiments/create"> AJOUTER UN NOUVEL
                                            ETAGE</a></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
