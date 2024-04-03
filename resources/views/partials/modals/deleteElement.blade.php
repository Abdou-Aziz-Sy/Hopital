<div class="modal fade" id="deleteModal{{ $article->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $article->id }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel{{ $article->id }}">Confirmation de suppression</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Êtes-vous sûr de vouloir supprimer l'article "{{ $article->titre }}" ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                <form method="POST" action="{{ url('article/'. $article->id) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Confirmer la suppression</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>