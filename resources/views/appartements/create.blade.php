@extends('base')

@section('content')
    <div class="card card-primary">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title" >formulaire d'ajout d'appartement</h1>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                       @include('batiments._form', [
                        'action'=> route('batiments.store')
                       ]);
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


