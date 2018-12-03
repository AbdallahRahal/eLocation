<div class="container" style="max-width: 98%;margin-top: 5%">
<p><h2>Mes Utilisateurs</h2></p>
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Pseudo</th>
                <th scope="col">Mot de passe</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Sexe</th>
                <th scope="col">Mail</th>
                <th scope="col">Code Postal</th>
                <th scope="col">Ville</th>
                <th scope="col">Statut</th>
                <th scope="col">Etat</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
    while($donneesAffichage = $affichage_utilisateur->fetch()){
        echo"<tr><th scope=\"row\">".$donneesAffichage['id']."</th>
            <td> ".$donneesAffichage['pseudo']."</td>
            <td>*********</td>
            <td> ".$donneesAffichage['nom']."</td>
            <td> ".$donneesAffichage['prenom']."</td>
            <td> ".$donneesAffichage['adresse']."</td>
            <td> ".$donneesAffichage['sexe']."</td>
            <td> ".$donneesAffichage['mail']."</td>
            <td> ".$donneesAffichage['cp']."</td>
            <td> ".$donneesAffichage['ville']."</td>
            <td> ".$donneesAffichage['statut']."</td>
            <td> ".$donneesAffichage['etat']."</td>
            <form action=\"index.php\" method=\"get\">
            <input type='hidden' name='page' value='accueil'>
            <input type='hidden' name='rub' value='uti'>
            <td><button type=\"submit\" name=\"supp\" value=\"".$donneesAffichage['id']."\" class=\"btn btn-danger btn-sm\">Supprimer</button></td>
            <td><button type=\"submit\" name=\"modif\" value=\"".$donneesAffichage['id']."\" class=\"btn btn-danger btn-sm\">Modifier</button></td>
            </tr></form>";
    }
    ?>
        </tbody>
    </table>
</div>