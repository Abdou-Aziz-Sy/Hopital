<form action="{{ route('admin.assistant') }}" method="POST">
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" name="matricule" value="{{ old('matricule') }}" placeholder="Matricule" required autocomplete="off">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" name="nom" value="{{ old('nom') }}" placeholder="Nom" required autocomplete="off">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" name="prenom" value="{{ old('prenom') }}" placeholder="Prénom" required autocomplete="off">
        </div>
        <div class="form-group">
            <input type="email" class="form-control form-control-lg" name="mail" value="{{ old('mail') }}" placeholder="Adresse Email" required autocomplete="off">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" name="adresse" value="{{ old('adresse') }}" placeholder="Adresse" required autocomplete="off">
        </div>
        <div class="form-group">
    <label for="medecin">Médecin :</label>
    <select class="form-control" id="medecin" name="medecin">
        <option value="" disabled selected>Choisissez un médecin</option>
        @foreach ($Medecins as $Medecin)
            <option value="{{ $Medecin->Matricule }}">Dr. {{ $Medecin->Prenom }} {{ $Medecin->Nom }}</option>
        @endforeach
    </select>
</div>
<button type="submit" name="Enregistrer" class="btn btn-success mb-2">Enregistrer</button>
</div>
</form>
