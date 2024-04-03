<form id="secondForm" action="{{ route('dossier.dossier') }}" method="POST" style="display: none;">
    @method('PATCH')
    @csrf
    <div class="modal-body">
        <center>

            <body class="h-100 gradient-custom-2">
                <div class="form-group">
                    <h3 class="fw-normal mb-5" style="color: #20c997;">Antécédents Personnels</h3>
                    <h6 style="color: #20c997;">Médicaux</h6>
                    <div class="row">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="HTA-Gravidique" id="inlineRadio1"
                                value="Oui">
                            <label class="form-check-label" for="inlineRadio1">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="HTA-Gravidique" id="inlineRadio1"
                                value="Non">
                            <label class="form-check-label" for="inlineRadio1">Non</label>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="form3Examplea4" />
                                <label class="form-label" for="form3Examplea4">Autres</label>
                            </div>
                        </div>
                    </div>
                    <h6 style="color: #20c997;">HTA-Gravidique : </h6>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="form3Examplea4" />
                                <label class="form-label" for="form3Examplea4">Menarche</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="form3Examplea5" />
                                <label class="form-label" for="form3Examplea5">Gestité</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="form3Examplea4" />
                                <label class="form-label" for="form3Examplea4">Parité</label>
                            </div>
                        </div>
                        <div class="list-group">
                            <label class="list-group-item d-flex gap-2">
                                <input class="form-check-input flex-shrink-0" type="checkbox"
                                    value="Grossesses gémellaires" name="HTA[]" checked>
                                <span>
                                    Grossesses gémellaires
                            </label>
                            <label class="list-group-item d-flex gap-2">
                                <input class="form-check-input flex-shrink-0" type="checkbox" name="HTA[]"
                                    value="Tocolyse prolongée">
                                <span>
                                    Tocolyse prolongée
                                    <small class="d-block text-body-secondary">4 Semaines
                                    </small>
                                </span>
                            </label>

                        </div>
                    </div>
                    <div class="row">
                        <h6 style="color: #20c997;">ATCD Decompensation</h6>
                        <br>
                        <label class="list-group-item d-flex gap-2">
                            <input class="form-check-input flex-shrink-0" type="radio" name="ATCD_decompensation"
                                id="listGroupRadios1" value="Oui" checked>
                            <span>Oui</span>
                        </label>
                        <label class="list-group-item d-flex gap-2">
                            <input class="form-check-input flex-shrink-0" type="radio" name="ATCD_decompensation"
                                id="listGroupRadios2" value="Non">
                            <span>Non</span>
                        </label>
                        <h6 style="color: #20c997;">Hospitalisations Anterieures</h6>
                        <br>
                        <label class="list-group-item d-flex gap-2">
                            <input class="form-check-input flex-shrink-0" type="radio" name="Hospitalisationsanterieures"
                                id="listGroupRadios1" value="Oui" checked>
                            <span>Oui</span>
                        </label>
                        <label class="list-group-item d-flex gap-2">
                            <input class="form-check-input flex-shrink-0" type="radio" name="Hospitalisationsanterieures"
                                id="listGroupRadios2" value="Non">
                            <span>Non</span>
                        </label>
                    </div>


            </body>
        </center>
        <button type="button" class="btn btn-secondary" id="prevButton">Précédent</button>
        <button type="button" class="btn btn-secondary" id="nextButton">Suivant</button>

    </div>
</form>