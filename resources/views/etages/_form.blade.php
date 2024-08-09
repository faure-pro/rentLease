<form action="{{ $action }}" method="POST">
    @csrf
    @isset($method)
        @method('put')

   @endisset
    <div class="card-body">
        <div class="form-group">
            <label for="numero">Numero </label>
            <input type="text" name="numero" class="form-control @error('numero') is-invalid @enderror"  value="{{ old('numero', )}} " id="numero"
                placeholder="Entrer le numero de l etage">
                @error('numero')
                    <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
        </div>
        <div class="form-group">
            <label for="numero">NombreAppartements </label>
            <input type="number" name="nombreAppartements" class="form-control @error('nombreAppartements') is-invalid @enderror"  value="{{ old('nombreAppartements', )}} " id="numero"
                placeholder="Entrer le nombre d'Appartements">
                @error('nombreAppartements')
                    <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="description de l'etage ">{{ old('description', ) }}</textarea>
            @error('description')
                <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">cocher si avez fini </label>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit " class="btn btn-primary">ENREGISTRER</button>
    </div>
</form>