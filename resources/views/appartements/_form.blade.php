<form action="{{ $action }}" method="POST">
    @csrf
    @isset($method)
        @method('put')

   @endisset
    <div class="card-body">
        <div class="form-group">
            <label for="nom">Nom </label>
            <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror"  value="{{ old('nom',)}} " id="nom"
                placeholder="Entrer le nom du batimemt">
                @error('nom')
                    <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
        </div>
        <div>
            <label>Nonmbre de Chambre:</label>
            <input type="number" name="nombreDeChambre" class="form-control @error('nombreDeChambre') is-invalid @enderror" value="{{ old('nombreDeChambre',) }}" id="nombreDeChambre" 
            placeholder="Entrer le nombre de chambre">
            @error('nombreDeChambre')
                <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label>Prix:</label>
            <input type="number" name="prix" class="form-control @error('prix') is-invalid @enderror" value="{{ old('prix',) }}" id="amount" 
            placeholder="Entrer le prix de l'appartement">
            @error('prix')
                <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        
        
        <div>
            <label>Disponibilite:</label>
            <textarea name="" class="form-control @error('disponibilite') is-invalid @enderror" placeholder="disponibilite de l appartement">{{ old('disponibilite' ) }}</textarea>
            @error('disponibilite')
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