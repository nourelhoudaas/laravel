
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Employés</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Liste des Employés</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID_NIN</th>
                    <th>ID_P</th>
                    <th>ID du département</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>NOM DU DEPARTEMENT</th>


                </tr>
            </thead>
            <tbody>
                @foreach($empdepart as $emp)
                <tr>
                    <td>{{ $emp->ID_NIN }}</td>
                    <td>{{ $emp->ID_P }}</td>
                    <td>{{ $emp->ID_D}}</td>

                    <td>{{ $emp->NOM_P }}</td>
                    <td>{{ $emp->PRENOM_O }}</td>
                    <td>{{ $emp->NOM_D }}</td>
                    <td>
                        <a href="{{ route('fichetechemp', ['id' => $emp->ID_NIN]) }}" class="btn btn-info btn-sm">Voir Détails</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
