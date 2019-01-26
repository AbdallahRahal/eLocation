<div class="container" style="max-width: 98%;margin-top: 5%">
  <br><h2>Mes Utilisateurs</h2><br>
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Pseudo</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Nom</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Prénom</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Adresse</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Sexe</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Mail</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Code Postal</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Ville</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Statut</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Etat</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;"></th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;"></th>
            </tr>
        </thead>
        <tbody>
        <?php
    while($donneesAffichage = $affichage_utilisateur->fetch()){
        echo"<th scope=\"row\"> ".$donneesAffichage['pseudo']."</th>
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
            <td><button type=\"submit\" name=\"supp\" value=\"".$donneesAffichage['id']."\" class=\"btn btn-warning btn-sm\">Supprimer</button></td>
            <td><button type=\"submit\" name=\"modif\" value=\"".$donneesAffichage['id']."\" class=\"btn btn-warning btn-sm\">Modifier</button></td>
            </tr></form>";
    }
    ?>
        </tbody>
    </table>
</div>