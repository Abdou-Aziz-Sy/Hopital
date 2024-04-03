<div id="form2" style="display:none;">
    <form action="{{ route('dossier.dossier') }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="modal-body">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12">
                        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                            <div class="card-body p-0">
                                <div class="row g-0">
                                    <div class="col-md-12">
                                        <div class="p-5">
                                            <CEnter>
                                                <h3 class="fw-normal mb-5" style="color: #20c997;">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        fill="currentColor" class="bi bi-file-medical"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8.5 4.5a.5.5 0 0 0-1 0v.634l-.549-.317a.5.5 0 1 0-.5.866L7 6l-.549.317a.5.5 0 1 0 .5.866l.549-.317V7.5a.5.5 0 1 0 1 0v-.634l.549.317a.5.5 0 1 0 .5-.866L9 6l.549-.317a.5.5 0 1 0-.5-.866l-.549.317zM5.5 9a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z" />
                                                        <path
                                                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1" />
                                                    </svg>
                                                    Antécédents Personnelles
                                                </h3>
                                            </CEnter>
                                            <center>
                                                <h4 style="color: #20c997;">Médicaux</h4>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="HTA-Gravidique"
                                                        id="inlineRadio1" value="Oui">
                                                    <label class="form-check-label" style="color: #000;"
                                                        for="inlineRadio1">Oui</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="HTA-Gravidique"
                                                        id="inlineRadio2" value="Non">
                                                    <label class="form-check-label" style="color: #000;"
                                                        for="inlineRadio2">Non</label>
                                                </div>
                                            </center>
                                            <div class="form-group">
                                                <input type="number" class="form-control form-control-lg"
                                                    name="HTA-Gravidique" value="{{ old('Autres') }}"
                                                    placeholder="Autres....." required autocomplete="Autres" autofocus>
                                            </div>
                                            <center>
                                            <h4 style="color: #20c997;">Gyneco Obstetricaux</h4>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" name="Menarche"
                                                                class="form-control form-control-lg"
                                                                id="form3Examplea7" />
                                                            <label class="form-label"
                                                                for="form3Examplea7">Menarche</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" name="Parité"
                                                                class="form-control form-control-lg"
                                                                id="form3Examplea8" />
                                                            <label class="form-label"
                                                                for="form3Examplea8">Parité</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" name="Gestite"
                                                                class="form-control form-control-lg"
                                                                id="form3Examplea8" />
                                                            <label class="form-label"
                                                                for="form3Examplea8">Gestite</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" name="Gyneco_obstetricaux[]"
                                                            type="checkbox" id="inlineCheckbox1"
                                                            value="Grossesses gémellaires[]">
                                                        <label class="form-check-label" for="inlineCheckbox1">Grossesses
                                                            gémellaires</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" name="Gyneco_obstetricaux[]"
                                                            type="checkbox" id="inlineCheckbox2"
                                                            value="Tocolyse prolongée">
                                                        <label class="form-check-label" for="inlineCheckbox2">Tocolyse
                                                            prolongée</label>
                                                    </div>
                                                </div>
                                                </center>
                                                <center>
                                                <h4 style="color: #20c997;">ATCD Decompensation</h4>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="ATCD_decompensation"
                                                        id="inlineRadio1" value="Oui">
                                                    <label class="form-check-label" style="color: #000;"
                                                        for="inlineRadio1">Oui</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name=""
                                                        id="inlineRadio2" value="Non">
                                                    <label class="form-check-label" style="color: #000;"
                                                        for="inlineRadio2">Non</label>
                                                </div>
                                            </center>

                                            <center>
                                                <h4 style="color: #20c997;">Hospitalisations Anterieures</h4>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="Hospitalisations Anterieures"
                                                        id="inlineRadio1" value="Oui">
                                                    <label class="form-check-label" style="color: #000;"
                                                        for="inlineRadio1">Oui</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="Hospitalisationsanterieures"
                                                        id="inlineRadio2" value="Non">
                                                    <label class="form-check-label" style="color: #000;"
                                                        for="inlineRadio2">Non</label>
                                                </div>
                                            </center>                                            
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <button class="btn btn-secondary" id="nextButton2">Enregister</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>