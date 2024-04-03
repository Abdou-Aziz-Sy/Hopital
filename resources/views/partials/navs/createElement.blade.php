<div class="row">
  <div class="col-lg-12">
    <div class="d-flex justify-content-end">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
    Ajouter un article
</button>

<!-- Fenêtre modale -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Ajouter un article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Insérez le contenu du formulaire ici -->
                <form action="{{ url('article') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="titre">Titre:</label>
                        <input type="text" class="form-control" id="titre" placeholder="Entrez un titre" name="titre" required>
                    </div>

                    <div class="form-group">
                        <label for="content">Ajouter le contenu:</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="auteur">Ajouter auteur:</label>
                        <input type="text" class="form-control" id="auteur" placeholder="auteur" value="{{ Auth::user()->prenom }} {{ Auth::user()->name }}" name="auteur" readonly>
                    </div>

                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</div>
    </div>
  </div>
</div>