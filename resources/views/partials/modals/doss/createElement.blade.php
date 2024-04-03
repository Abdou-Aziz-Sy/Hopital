<div class="row">
    <div class="col-lg-12">
        <!-- Fenêtre modale -->
        <div class="modal fade" id="addModale" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-folder" viewBox="0 0 16 16">
                                <path
                                    d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a2 2 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.13q.323-.119.684-.12h5.396z" />
                            </svg>
                            Ajouter un nouveau Patient
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <!-- Premier formulaire -->
                    @include('partials.modals.doss.form2')

                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Ajoutez ceci dans votre script JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour afficher le formulaire suivant
    function showNextForm(currentFormId, nextFormId) {
        document.getElementById(currentFormId).style.display = 'none';
        document.getElementById(nextFormId).style.display = 'block';
    }

    // Fonction pour afficher le formulaire précédent
    function showPrevForm(currentFormId, prevFormId) {
        document.getElementById(currentFormId).style.display = 'none';
        document.getElementById(prevFormId).style.display = 'block';
    }

    // Boutons "Suivant" pour chaque formulaire
    for (let i = 1; i <= 7; i++) { // 7 car le dernier formulaire n'a pas de bouton "Suivant"
        let nextButton = document.getElementById('nextButton' + i);
        if (nextButton) {
            nextButton.addEventListener('click', function() {
                showNextForm('form' + i, 'form' + (i + 1));
            });
        }
    }

    // Boutons "Précédent" pour chaque formulaire
    for (let i = 2; i <= 8; i++) { // Commence à 2 car le premier formulaire n'a pas de bouton "Précédent"
        let prevButton = document.getElementById('prevButton' + i);
        if (prevButton) {
            prevButton.addEventListener('click', function() {
                showPrevForm('form' + i, 'form' + (i - 1));
            });
        }
    }
});

</script>
<script>
// Attend que le DOM soit entièrement chargé
document.addEventListener('DOMContentLoaded', function() {
    // Récupère le bouton "Créer un dossier"
    const createFolderButton = document.querySelector('[data-target="#addModale"]');

    // Ajoute un écouteur d'événements pour le clic sur le bouton
    createFolderButton.addEventListener('click', function() {
        // Récupère la fenêtre modale
        const addModale = document.querySelector('#addModale');

        // Ouvre la fenêtre modale
        if (addModale) {
            // Assurez-vous que la méthode .modal existe pour éviter les erreurs
            if (typeof $(addModale).modal === 'function') {
                $(addModale).modal('show');
            } else {
                console.error(
                    'La méthode .modal n\'est pas disponible. Vérifiez que jQuery et Bootstrap sont correctement inclus.'
                );
            }
        } else {
            console.error('La fenêtre modale n\'a pas été trouvée.');
        }
    });
});
</script>