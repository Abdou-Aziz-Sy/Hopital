<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signes Paracliniques - Formulaire</title>
    <!-- Ajout de Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Signes Paracliniques - Formulaire</h1>

        <form action="" method="POST">
            @csrf
            <!-- TELECOEUR -->
            <div class="form-group">
                <h2>TELECOEUR</h2>
                <div>
                    <label for="telecoeur">TELECOEUR :</label>
                    <div>
                        <input type="radio" name="telecoeur" value="Oui" class="mr-2" onclick="showECGSection()"> Oui
                        <input type="radio" name="telecoeur" value="Non" onclick="hideECGSection()"> Non
                    </div>
                </div>
            </div>

            <!-- ECG Section -->
            <div id="ecg_section" style="display: none;">
                <h2>ECG</h2>
                <div class="form-group">
                    <label for="ecg">ECG :</label>
                    <div>
                        <input type="radio" name="ecg" value="Oui" class="mr-2" required> Oui
                        <input type="radio" name="ecg" value="Non"> Non
                    </div>
                </div>

                <!-- Résultats ECG -->
                <h3>Résultats ECG</h3>
                <div class="form-group">
                    <label>Résultats :</label><br>
                    <div class="form-check">
                        <input type="checkbox" name="resultats_ecg[]" value="Sinusal" class="form-check-input"> Sinusal<br>
                        <input type="checkbox" name="resultats_ecg[]" value="Tachycardie" class="form-check-input"> Tachycardie<br>
                        <input type="checkbox" name="resultats_ecg[]" value="Troubles conductifs" class="form-check-input"> Troubles conductifs<br>
                        <input type="checkbox" name="resultats_ecg[]" value="HAG" class="form-check-input"> HAG<br>
                        <input type="checkbox" name="resultats_ecg[]" value="HVG" class="form-check-input"> HVG<br>
                        <input type="checkbox" name="resultats_ecg[]" value="HAD" class="form-check-input"> HAD<br>
                        <input type="checkbox" name="resultats_ecg[]" value="HVD" class="form-check-input"> HVD<br>
                        <input type="checkbox" name="resultats_ecg[]" value="FA" class="form-check-input"> FA<br>
                        <input type="checkbox" name="resultats_ecg[]" value="fa" class="form-check-input"> fa<br>
                        <input type="checkbox" name="resultats_ecg[]" value="Autres" class="form-check-input"> Autres<br>
                    </div>
                </div>
            </div>

                
            <!-- Fin de la section TELECOEUR -->

            <!-- ETT -->
            <div class="form-group">
                <h2>ETT</h2>
                <div>
                    <label for="ett">ETT :</label>
                    <div>
                        <input type="radio" name="ett" value="Oui" class="mr-2" onclick="showETTFields()"> Oui
                        <input type="radio" name="ett" value="Non" onclick="hideETTFields()"> Non
                    </div>
                </div>
            </div>

            <!-- Questions de l'ETT -->
            <div id="ett_fields" style="display: none;">
                <h3>Questions ETT</h3>
                <div class="form-group">
                    <label for="dtdvg">DTDVG :</label>
                    <input type="text" name="dtdvg" placeholder="DTDVG" class="form-control"><br>
                    <label for="dtsvg">DTSVG :</label>
                    <input type="text" name="dtsvg" placeholder="DTSVG" class="form-control"><br>
                    <label for="fevg">FEVG :</label>
                    <input type="text" name="fevg" placeholder="FEVG" class="form-control"><br>
                </div>
            </div>
            <!-- Fin des questions de l'ETT -->

            <!-- Autres questions ETT -->
            <div id="ett_other_questions" style="display: none;">
                <label for="epanchement_pericardique">Épanchement péricardique :</label>
                <div>
                    <input type="radio" name="epanchement_pericardique" value="Oui" class="mr-2"> Oui
                    <input type="radio" name="epanchement_pericardique" value="Non"> Non<br>
                </div>

                <label>Fuite valvulaire :</label><br>
                <div class="form-check">
                    <input type="checkbox" name="fuite_valvulaire[]" value="Absente" class="form-check-input"> Absente<br>
                    <input type="checkbox" name="fuite_valvulaire[]" value="Aortique" class="form-check-input"> Aortique<br>
                    <input type="checkbox" name="fuite_valvulaire[]" value="Mitrale" class="form-check-input"> Mitrale<br>
                    <input type="checkbox" name="fuite_valvulaire[]" value="Tricuspidienne" class="form-check-input"> Tricuspidienne<br>
                    <input type="checkbox" name="fuite_valvulaire[]" value="Pulmonaire" class="form-check-input"> Pulmonaire<br>
                </div>

                <label>Sténose valvulaire :</label><br>
                <div class="form-check">
                    <input type="checkbox" name="stenose_valvulaire[]" value="Absente" class="form-check-input"> Absente<br>
                    <input type="checkbox" name="stenose_valvulaire[]" value="Aortique" class="form-check-input"> Aortique<br>
                    <input type="checkbox" name="stenose_valvulaire[]" value="Mitrale" class="form-check-input"> Mitrale<br>
                    <input type="checkbox" name="stenose_valvulaire[]" value="Tricuspidienne" class="form-check-input"> Tricuspidienne<br>
                    <input type="checkbox" name="stenose_valvulaire[]" value="Pulmonaire" class="form-check-input"> Pulmonaire<br>
                </div>
            </div>

            <!-- Bouton Soumettre -->
            <button type="submit" class="btn btn-primary mt-4">Soumettre</button>
        </form>
    </div>

    <!-- Ajout de Bootstrap JavaScript (facultatif, mais nécessaire pour certaines fonctionnalités Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
      function showECGSection() {
            document.getElementById('ecg_section').style.display = 'block';
        }

        function hideECGSection() {
            document.getElementById('ecg_section').style.display = 'none';
        }
        function showETTFields() {
            document.getElementById('ett_fields').style.display = 'block';
            document.getElementById('ett_other_questions').style.display = 'block';
        }

        function hideETTFields() {
            document.getElementById('ett_fields').style.display = 'none';
            document.getElementById('ett_other_questions').style.display = 'none';
        }
    </script>
</body>
</html>
