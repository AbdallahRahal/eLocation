<div class="container" style="max-width: 85%;margin-top: 5%">
<p><h2>Mes Reprises</h2></p>
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prix</th>
                <th scope="col">Description</th>
                <th scope="col">Photo</th>
                <th scope="col">Stade</th>
                <th scope="col">Date</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
    while($donneesAffichage = $affichage_reprise->fetch()){
        echo"<tr><th scope=\"row\">".$donneesAffichage['ID']."</th>
            <td> ".$donneesAffichage['Nom'] ."</td>
            <td> ".$donneesAffichage['Prix']."</td>
            <td> ".$donneesAffichage['Description']."</td>
            <td><img src=\"".$donneesAffichage['Photo']."\"></td>
            <td> ".$donneesAffichage['Stade']."</td>
            <td> ".$donneesAffichage['Date']."</td>
            <td><button type=\"button\" class=\"btn btn-danger btn-sm\">Traiter</button></td>
            <td><button type=\"button\" class=\"btn btn-danger btn-sm\">Modifier</button></td>
            <td><button type=\"button\" class=\"btn btn-danger btn-sm\">Supprimer</button></td>
            </tr>";
    }
    ?>
        </tbody>
    </table>
</div>