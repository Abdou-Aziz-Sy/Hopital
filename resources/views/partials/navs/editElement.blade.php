<div class="modal fade" id="editModal{{ $article->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $article->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $article->id }}">Modifier l'article {{ $article->id }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('article/'. $article->id) }}">
                    @method('PATCH')
                    @csrf

                    <div class="form-group">
                        <label for="titre">Titre:</label>
                        <input type="text" class="form-control" id="titre" placeholder="Entrer titre" name="titre" value="{{ $article->titre }}">
                    </div>

                    <div class="form-group">
                        <label for="content">Ajouter le contenu:</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ $article->content }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="auteur">Auteur:</label>
                        <input type="text" class="form-control" id="auteur" placeholder="Entrer auteur" name="auteur" value="{{ $article->auteur }}" readonly>
                    </div>

                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
            </div>
        </div>
    </div>
</div>