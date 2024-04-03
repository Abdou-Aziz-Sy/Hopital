<div id="form3" style="display:none;">
    <form action="{{ route('dossier.dossier') }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="modal-body">
            <body class="h-100 gradient-custom-2">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12">
                            <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                                <div class="card-body p-0">
                                    <div class="row g-0">
                                        <div class="col-md-6">
                                            <div class="p-5">
                                                <h3 class="fw-normal mb-5" style="color: #20c997;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                                                    </svg>
                                                    Aspets Socio
                                                </h3>

                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-lg" name="prenom" value="{{ old('prenom') }}" placeholder="Prénom" required autocomplete="prenom" autofocus>
                                                </div>

                                                <div class="form-group">
                                                    <input type="number" class="form-control form-control-lg" name="age" value="{{ old('age') }}" placeholder="Age" required autocomplete="age" autofocus>
                                                </div>

                                                <div class="form-group">
                                                    <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Adresse Email" required autocomplete="email">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-lg" name="address" value="{{ old('address') }}" placeholder="Domicile" required autocomplete="address" autofocus>
                                                </div>

                                                <div class="form-group">
                                                    <select class="form-control form-control-lg" name="matrimoniale" required>
                                                        <option value="" disabled selected>Status Matrimoniale</option>
                                                        <option value="Marié(e)">Marié(e)</option>
                                                        <option value="Célibataire">Célibataire</option>
                                                        <option value="veuf(ve)">veuf(ve)</option>
                                                    </select>
                                                </div>
                                                <h6 style="color: #20c997;">Niveau Socio-économique</h6>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="economique" id="inlineRadio1" value="Bon">
                                                    <label class="form-check-label" for="inlineRadio1">Bon</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="economique" id="inlineRadio2" value="Moyen">
                                                    <label class="form-check-label" for="inlineRadio2">Moyen</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="economique" id="inlineRadio3" value="Bas">
                                                    <label class="form-check-label" for="inlineRadio3">Bas</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 bg-indigo text-white">
                                            <div class="p-5">
                                                <h3 class="fw-normal mb-5" style="color: #20c997;">Démographiques</h3>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-lg @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" placeholder="Nom" required autocomplete="nom" autofocus>
                                                    @error('nom')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-lg" name="phone" value="{{ old('phone') }}" placeholder="Numéro de Téléphone" required autocomplete="phone" autofocus>
                                                </div>

                                                <div class="form-group">
                                                    <select class="form-control form-control-lg" name="sexe" required>
                                                        <option value="" disabled selected>Sexe</option>
                                                        <option value="Masculin">Masculin</option>
                                                        <option value="Féminin">Féminin</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-lg @error('profession') is-invalid @enderror" name="profession" value="{{ old('profession') }}" placeholder="Profession" required autocomplete="profession" autofocus>
                                                    @error('profession')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <h6 style="color: #20c997;">Initiales</h6>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="initiale" id="inlineRadio1" value="N">
                                                    <label class="form-check-label" style="color: #000;" for="inlineRadio1">N</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="initiale" id="inlineRadio2" value="P">
                                                    <label class="form-check-label" style="color: #000;" for="inlineRadio2">P</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-secondary" id="prevButton3">Précédent</button>
                <button class="btn btn-secondary" id="nextButton3">Suivant</button>
            </body>
        </div>
    </form>
</div>
