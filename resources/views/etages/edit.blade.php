@extends('base')

@section('content')
    <div class="card card-success">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title"> MODIFICATION</h1>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @include('etages._form', [
                            'action' => route('etages.update', ['etage' => $etage->id]),
                            'method' => true
                        ])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    
        