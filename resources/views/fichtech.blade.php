<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'Employé</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Détails de l'Employé</h1>
        
        @if ($fichemp)
        <div class="card">
            <div class="card-header">
                <h2>{{ $fichemp->NOM_P }} {{ $fichemp->PRENOM_O }}</h2>
            </div>
            <div class="card-body">
                <p><strong>ID_NIN:</strong> {{ $fichemp->ID_NIN }}</p>
                <p><strong>ID_P:</strong> {{ $fichemp->ID_P }}</p>
                <p><strong>Nom:</strong> {{ $fichemp->NOM_P }}</p>
                <p><strong>Prénom:</strong> {{ $fichemp->PRENOM_O }}</p>
                <p><strong>Date de Naissance:</strong> {{ $fichemp->DATE_NAIS_P }}</p>
                <p><strong>Lieu de Naissance:</strong> {{ $fichemp->LIEU_N }}</p>
                <p><strong>Adresse:</strong> {{ $fichemp->ADDRESS }}</p>
                <p><strong>Email:</strong> {{ $fichemp->EMAIL }}</p>
                <p><strong>Téléphone:</strong> {{ $fichemp->PHONE_PN }}</p>
                <p><strong>Niveau:</strong> {{ $fichemp->NOM_N }}</p>
                <p><strong>Spécialité:</strong> {{ $fichemp->SPECIAL_N }}</p>
                <p><strong>Filière:</strong> {{ $fichemp->FILIERE_N }}</p>
                <p><strong>Poste:</strong> {{ $fichemp->NOM_POST }}</p>
                <p><strong>Grade:</strong> {{ $fichemp->GRADE_POST }}</p>
                <p><strong>Echellan:</strong> {{ $fichemp->ECHELLAN }}</p>
                <p><strong>Date de Recrutement:</strong> {{ $fichemp->DATE_RECT }}</p>
                <p><strong>Département:</strong> {{ $fichemp->Nom_D }}</p>
            </div>
        </div>
        @else
        <p>Aucun employé trouvé avec cet ID.</p>
        @endif

        <a href="{{ route('listeEmployes') }}" class="btn btn-primary mt-3">Retour à la liste</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
