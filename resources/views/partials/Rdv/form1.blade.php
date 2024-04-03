<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signes Cliniques - Formulaire</title>
    <!-- Ajout de Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Signes Cliniques - Formulaire</h1>

        <!-- Formulaire des signes cliniques -->
        <form action="" method="POST">
            @csrf

            <!-- Q15. Dyspnée d’effort -->
            <div class="form-group">
                <h2>Q15. Dyspnée d’effort</h2>
                <div>
                    <label for="dyspnee_effort">Dyspnée d’effort :</label>
                    <div>
                        <input type="radio" name="dyspnee_effort" value="Oui" onclick="showDyspneeDetails()"> Oui
                        <input type="radio" name="dyspnee_effort" value="Non" onclick="hideDyspneeDetails()"> Non
                    </div>
                </div>

                <!-- Section pour les détails de la dyspnée -->
                <div id="dyspnee_details" style="display: none;">
                    <!-- Q15-1. Type de dyspnée (NYHA) -->
                    <div class="form-group">
                        <label for="type_dyspnee">Type de dyspnée (NYHA) :</label>
                        <select name="type_dyspnee" class="form-control">
                            <option value="Type I">Type I</option>
                            <option value="Type II">Type II</option>
                            <option value="Type III">Type III</option>
                            <option value="Type IV">Type IV</option>
                        </select>
                    </div>

                    <!-- Q15-2. OEdème aigu du poumon -->
                    <div class="form-group">
                        <h2>Q15-2. OEdème aigu du poumon</h2>
                        <div>
                            <label for="oedeme_poumon">OEdème aigu du poumon :</label>
                            <div>
                                <input type="radio" name="oedeme_poumon" value="Oui"> Oui
                                <input type="radio" name="oedeme_poumon" value="Non"> Non
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Q16.Toux -->
            <div class="form-group">
                <h2>Q16. Toux</h2>
                <div>
                    <label for="toux">Toux :</label>
                    <div>
                        <input type="radio" name="toux" value="Oui"> Oui
                        <input type="radio" name="toux" value="Non"> Non
                    </div>
                </div>
            </div>

            <!-- Q17. Palpitations -->
            <div class="form-group">
                <h2>Q17. Palpitations</h2>
                <div>
                    <label for="palpitations">Palpitations :</label>
                    <div>
                        <input type="radio" name="palpitations" value="Oui"> Oui
                        <input type="radio" name="palpitations" value="Non"> Non
                    </div>
                </div>
            </div>

            <!-- Q18. OMI -->
            <div class="form-group">
                <h2>Q18. OMI</h2>
                <div>
                    <label for="omi">OMI :</label>
                    <div>
                        <input type="radio" name="omi" value="Oui"> Oui
                        <input type="radio" name="omi" value="Non"> Non
                    </div>
                </div>
            </div>

            <!-- Q19. Constantes -->
            <div class="form-group">
                <h2>Q19. Constantes</h2>
                <div>
                    <label for="ta">TA :</label>
                    <input type="text" name="ta" placeholder="Ex: 120/80" class="form-control"><br>

                    <label for="fc">FC :</label>
                    <input type="text" name="fc" placeholder="Ex: 70 bttm/min" class="form-control"><br>

                    <label for="fr">FR :</label>
                    <input type="text" name="fr" placeholder="Ex: 15 cycles/min" class="form-control"><br>

                    <label for="theta">Ѳ :</label>
                    <input type="text" name="theta" placeholder="Ex: 37.5 °C" class="form-control"><br>

                    <label for="poids">Poids :</label>
                    <input type="text" name="poids" placeholder="Ex: 70 kg" class="form-control"><br>

                    <label for="taille">Taille :</label>
                    <input type="text" name="taille" placeholder="Ex: 180 cm" class="form-control"><br>

                    <label for="imc">IMC :</label>
                    <input type="text" name="imc" placeholder="Ex: 21.6" class="form-control"><br>
                </div>
            </div>

            <!-- Q20. Souffle cardiaque -->
            <div class="form-group">
                <h2>Q20. Souffle cardiaque</h2>
                <div>
                    <label for="souffle_cardiaque">Souffle cardiaque :</label>
                    <div>
                        <input type="radio" name="souffle_cardiaque" value="Oui" onclick="showSouffleDetails()"> Oui
                        <input type="radio" name="souffle_cardiaque" value="Non" onclick="hideSouffleDetails()"> Non
                    </div>
                </div>

                <!-- Section pour les détails du souffle cardiaque -->
                <div id="souffle_details" style="display: none;">
                    <!-- Q20-1. Type de souffle -->
                    <div class="form-group">
                        <label for="type_souffle">Type de souffle :</label><br>
                        <input type="checkbox" name="type_souffle[]" value="IM"> IM<br>
                        <input type="checkbox" name="type_souffle[]" value="RM"> RM<br>
                        <input type="checkbox" name="type_souffle[]" value="IA"> IA<br>
                        <input type="checkbox" name="type_souffle[]" value="RA"> RA<br>
                        <input type="checkbox" name="type_souffle[]" value="IP"> IP<br>
                        <input type="checkbox" name="type_souffle[]" value="RP"> RP<br>
                        <input type="checkbox" name="type_souffle[]" value="IT"> IT<br>
                        <input type="checkbox" name="type_souffle[]" value="RP"> RP<br>
                    </div>
                </div>
            </div>

            <!-- Q21. TSVJ -->
            <div class="form-group">
                <h2>Q21. TSVJ</h2>
                <div>
                    <label for="tsvj">TSVJ :</label>
                    <div>
                        <input type="radio" name="tsvj" value="Oui"> Oui
                        <input type="radio" name="tsvj" value="Non"> Non
                    </div>
                </div>
            </div>

            <!-- Q22. Hépatomégalie -->
            <div class="form-group">
                <h2>Q22. Hépatomégalie</h2>
                <div>
                    <label for="hepatomegalie">Hépatomégalie :</label>
                    <div>
                        <input type="radio" name="hepatomegalie" value="Oui"> Oui
                        <input type="radio" name="hepatomegalie" value="Non"> Non
                    </div>
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

    <!-- Script pour afficher ou cacher les détails du souffle cardiaque -->
    <script>
        function showSouffleDetails() {
            document.getElementById('souffle_details').style.display = 'block';
        }

        function hideSouffleDetails() {
            document.getElementById('souffle_details').style.display = 'none';
        }

        function showDyspneeDetails() {
            document.getElementById('dyspnee_details').style.display = 'block';
        }

        function hideDyspneeDetails() {
            document.getElementById('dyspnee_details').style.display = 'none';
        }
    </script>
</body>
</html>
