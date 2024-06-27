

<h1>Résultats de la recherche</h1>

{{-- Formulaire de recherche --}}
<form action="{{ route('search') }}" method="GET">
    <div class="form-group">
       <label for="NOM_POST">Rechercher par PHONE_PN:</label>
        <input type="text" name="NOM_POST" id="NOM_POST" class="form-control" value="{{ request('ID_NIN') }}">
     </div>
    <button type="submit" class="btn btn-primary">Rechercher</button>
</form>

<hr>

{{-- Affichage des résultats --}}
@if ($employe->isEmpty())
    <p>Aucun employé trouvé.</p>
@else
    <table class="table">
        <thead>
            <tr>
                <th>PHONE_PN</th>
                <th>ID_P</th>
                <th>ID_NIN</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Poste</th>
                <th>Département</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employe as $employe)
                <tr>
                  <td>{{ $employe->PHONE_PN }}</td>
                    <td>{{ $employe->ID_P }}</td>
                    <td>{{ $employe->ID_NIN }}</td>
                    <td>{{ $employe->NOM_P }}</td>
                    <td>{{ $employe->PRENOM_O }}</td>
                    <td>{{ $employe->NOM_POST }}</td>
                    <td>{{ $employe->Nom_D }}</td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
    <!-- Lien de déconnexion -->
<!-- Lien de déconnexion -->
<a href="{{ route('logout') }}"
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
   class="btn btn-danger">
    Logout
</a>

<!-- Formulaire caché pour la déconnexion -->
<form method="POST" action="{{ route('logout') }}" id="logout-form" style="display: none;">
    @csrf
</form>
@endif
