<form action="{{ $action }}" method="POST">
    @csrf
    @isset($method)
        @method('put')

   @endisset
    <div class="card-body">
        <div class="form-group">
            <label for="nom">Nom </label>
            <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror"  value="{{ old('nom',$batiment->nom)}} " id="nom"
                placeholder="Entrer le nom du batimemt">
                @error('nom')
                    <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
        </div>
        <div>
            <label>ville:</label>
            <input type="text" name="ville" class="form-control @error('ville') is-invalid @enderror" value="{{ old('ville',$batiment->ville) }}" id="ville" 
            placeholder="Entrer la ville">
            @error('ville')
                <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description" class="form-control @error('ville') is-invalid @enderror" placeholder="description du batimemt">{{ old('description',$batiment->description ) }}</textarea>
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