<div class="container" style="max-width: 70%;margin-top: 5%">
  <br><h2>Mes Points Relais</h2><br>
    <table class="table table-striped table-hover" style="align-center: auto;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Ouverture</th>
                <th scope="col">Fermeture</th>
                <th scope="col">Code Postal</th>
                <th scope="col">Ville</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <form action="" method="POST">
        <tr><th scope="row"></th>
            <td><input required type="text" class="form-control" name="nom"></td>
            <td><input required type="text" class="form-control" name="adresse"></td>
            <td><input required type="time" class="form-control" name="ouverture"></td>
            <td><input required type="time" class="form-control" name="fermeture"></td>
            <td><input required type="text" class="form-control" name="cp"></td>
            <td><input required type="text" class="form-control" name="ville"></td>
            <td></td>
            <td><button type="submit"  name="ajout_relais" value="true" class="btn btn-danger btn-sm" style="margin-left: 15%">Ajouter</button></td>
        </tr>
        </form>
        <?php
        
    while($donneesAffichage = $donnees_relais->fetch()){
            $ouverture = substr($donneesAffichage['ouverture'], 0, 5);
            $fermeture = substr($donneesAffichage['fermeture'], 0, 5);
            ?>
            
            <tr><th scope="row"><?php echo $donneesAffichage['id']; ?></th>
            <td><?php echo $donneesAffichage['nom']; ?></td>
            <td><?php echo $donneesAffichage['adresse']; ?></td>
            <td><?= $ouverture ?></td>
            <td><?= $fermeture ?></td>
            <td><?php echo $donneesAffichage['cp']; ?></td>
            <td><?php echo $donneesAffichage['ville']; ?></td>
        
            
                <form action="" method="POST">
                <td><button type="submit" name="modif_cat" value ="<?=$donneesAffichage['id']?>" class="btn btn-danger btn-sm">Modifier</button></td>
                <td><button type="submit" name="suppr_relais" value ="<?=$donneesAffichage['id']?>" style="margin-left: -9%" class="btn btn-danger btn-sm">Supprimer</button></td>
            </form>
                
            </tr>
            <?php
    }
    ?>
        </tbody>
    </table>
</div>