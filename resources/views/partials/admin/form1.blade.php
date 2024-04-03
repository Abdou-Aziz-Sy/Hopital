<form action="{{ route('admin.docteur') }}" method="POST">
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
    <label for="specialite">Spécialité médicale :</label>
    <select class="form-control" id="specialite" name="specialite">
        <option value="" disabled selected>Choisissez une spécialité</option>
        <option value="Anesthésiologie">Anesthésiologie</option>
        <option value="Cardiologie">Cardiologie</option>
        <option value="Dermatologie">Dermatologie</option>
        <option value="Endocrinologie">Endocrinologie</option>
        <option value="Gastro-entérologie">Gastro-entérologie</option>
        <option value="Génétique médicale">Génétique médicale</option>
        <option value="Gériatrie">Gériatrie</option>
        <option value="Hématologie">Hématologie</option>
        <option value="Immunologie clinique et allergie">Immunologie clinique et allergie</option>
        <option value="Médecine interne">Médecine interne</option>
        <option value="Médecine d'urgence">Médecine d'urgence</option>
        <option value="Néphrologie">Néphrologie</option>
        <option value="Neurologie">Neurologie</option>
        <option value="Oncologie médicale">Oncologie médicale</option>
        <option value="Pédiatrie">Pédiatrie</option>
        <option value="Physiatrie">Physiatrie</option>
        <option value="Pneumologie">Pneumologie</option>
        <option value="Psychiatrie">Psychiatrie</option>
        <option value="Rhumatologie">Rhumatologie</option>
    </select>
</div>

<div class="form-group">
    <label for="hopital">Hôpitaux :</label>
    <select class="form-control" id="hopital" name="hopital">
        <option value="" disabled selected>Choisissez un hôpital</option>
        @foreach ($Hopitals as $hopital)
            <option value="{{ $hopital->idHopital }}">{{ $hopital->Nom }} ({{ $hopital->Adresse }})</option>
        @endforeach
    </select>
</div>
<button type="submit" name="Enregistrer" class="btn btn-success mb-2">Enregistrer</button>

    </div>
</form>
