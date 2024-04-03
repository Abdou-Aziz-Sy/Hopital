@extends('layouts.dashboard')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une nouvelle ordonnance</title>

</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Créer une nouvelle ordonnance</div>

            <div class="card-body">
                <form method="POST" action="{{ route('ordonnance.store') }}">
                    @csrf

                    <div class="form-group">
                        <label for="medecin">Médecin :</label>
                        <input type="text" name="medecin" id="medecin" class="form-control"
                            value="{{ Auth::user()->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="num">Choisir un patient:</label>

                        <select class="form-control" name="num" id="num">
                        <option value="" disabled selected>Choisissez un patient</option>
                            @foreach ($patients as $patient)
                            <option value="{{ $patient->Numero }}">{{ $patient->Prenom }} {{ $patient->Nom }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <input type="hidden" name="mat" value="{{Auth::user()->matricule}}">
                    <div class="form-group">
                        <label for="medicaments">Médicaments :</label>
                        <input type="text" name="medicaments" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="posologie">Posologie :</label>
                        <input type="text" name="posologie" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="date">Date de l'ordonnance :</label>
                        <input type="date" name="date" id="date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="signature">Signature du médecin :</label>
                        <canvas id="signatureCanvas" width="400" height="200"></canvas>
                        <input type="hidden" name="signature" id="signature" required>
                    </div>

                    <button type="button" class="btn btn-success" id="addMedicine">Ajouter un médicament</button>

                    <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
                </form>
            </div>

            <div class="card-footer">Signature du médecin</div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>
    <script>
    var canvas = document.getElementById('signatureCanvas');
    var signaturePad = new SignaturePad(canvas);

    canvas.addEventListener('touchstart', function(e) {
        // Permet de prévenir le défilement lors de la signature sur mobile
        e.preventDefault();
    });

    function saveSignature() {
        if (signaturePad.isEmpty()) {
            alert('Veuillez signer avant d\'enregistrer.');
        } else {
            var dataURL = signaturePad.toDataURL();
            document.getElementById('signature').value = dataURL;
            alert('Signature enregistrée.');
        }
    }

    document.getElementById("addMedicine").addEventListener("click", function() {
        var medicinesContainer = document.createElement('div');
        medicinesContainer.classList.add('form-group');

        var medicineInput = document.createElement('input');
        medicineInput.setAttribute('type', 'text');
        medicineInput.setAttribute('name', 'medicaments[]');
        medicineInput.classList.add('form-control');
        medicineInput.setAttribute('required', true);

        var posologieInput = document.createElement('input');
        posologieInput.setAttribute('type', 'text');
        posologieInput.setAttribute('name', 'posologie[]');
        posologieInput.classList.add('form-control');
        posologieInput.setAttribute('required', true);
        posologieInput.setAttribute('placeholder', 'Posologie');

        medicinesContainer.appendChild(medicineInput);
        medicinesContainer.appendChild(posologieInput);

        document.querySelector('form').insertBefore(medicinesContainer, document.getElementById("addMedicine"));
    });
    </script>
</body>

</html>
@endsection