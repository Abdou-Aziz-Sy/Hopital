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
                                    <label for="Description">Description:</label>
                                    <input type="text" class="form-control" id="Description"
                                        placeholder="Entrez une description" name="description" value="{{ $article->description }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="titre">Entrez la categorie de votre blog</label>
                                    <select class="form-select form-select-lg mb-3" class="form-control" id="category"
                                        aria-label=".form-select-lg example" name="category" value="{{ $article->category }}" required>
                                        <option selected>Catégorie</option>
                                        <option value="Voyage">Voyage</option>
                                        <option value="Cuisine">Cuisine</option>
                                        <option value="Sport">Sport</option>
                                        <option value="Musique">Musique</option>
                                        <option value="Films & Séries">Films & Séries</option>
                                        <option value="Télévision">Télévision</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="article_photo">Ajouter une photo:</label>
                                    <input type="file" name="article_photo" id="article_photo" accept="image/*" value="{{ $article->category_photo }}" required>
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