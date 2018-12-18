<div class="container" style="max-width: 80%;margin-top: 5%">
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
            <td><input required type="text" class="form-control" name="nom" style="max-width: 90%"></td>
            <td><input required type="text" class="form-control" name="adresse" style="max-width: 90%"></td>
            <td><input required type="time" class="form-control" name="ouverture" style="max-width: 100%"></td>
            <td><input required type="time" class="form-control" name="fermeture" style="max-width: 100%"></td>
            <td><input required type="text" class="form-control" name="cp" style="max-width: 65%"></td>
            <td><input required type="text" class="form-control" name="ville" style="max-width: 80%"></td>
            <td></td>
            <td><button type="submit"  name="ajout_relais" value="true" class="btn btn-danger btn-sm" style="margin-left: 0%">Ajouter</button></td>
        </tr>
        </form>
        <?php
        
    while($donneesAffichage = $donnees_relais->fetch()){
            $ouverture = substr($donneesAffichage['ouverture'], 0, 5);
            $fermeture = substr($donneesAffichage['fermeture'], 0, 5);
            ?><form action="" method="POST">
           
            <?php if(isset($_POST['modif_relais']) && $_POST['modif_relais'] == $donneesAffichage['id'] ){?>
            
            <tr>
            <th scope="row">
            <?php echo $donneesAffichage['id']; ?>
            </th>    
            <td>
                <input type=text <?=$donneesAffichage['nom']?> name='nom' value='<?=$donneesAffichage['nom']?>' class="form-control" style="max-width: 90%">
            </td>
            <td>
                <input type=text <?=$donneesAffichage['adresse']?> name='adresse' value='<?=$donneesAffichage['adresse']?>' class="form-control">
            </td>
            <td>
                <input type=time <?=$ouverture?> name='ouverture' value='<?=$ouverture?>' class="form-control" style="max-width: 100%">
            </td>
            <td>
                <input type=time <?=$fermeture?> name='fermeture' value='<?=$fermeture?>' class="form-control" style="max-width: 100%">
            </td>
            <td>
                <input type=text <?=$donneesAffichage['cp']?> name='cp' value='<?=$donneesAffichage['cp']?>' class="form-control" style="max-width: 65%">
            </td>
            <td>
                <input type=text <?=$donneesAffichage['ville']?> name='ville' value='<?=$donneesAffichage['ville']?>' class="form-control" style="max-width: 80%">
            </td>
            <td>
                <button type="submit" name="valid_modif_relais" value ="<?=$donneesAffichage['id']?>" class="btn btn-danger btn-sm" style="margin-left:-10%">Valider</button>
            </td>
            <td>
                <a href=""><button type="submit" name="retour_relais" style="margin-left: -10%" class="btn btn-danger btn-sm">Retour</button></a>
            </td>
            </tr>
            </form>
            
            <?php }else{
            ?>
            
            <tr>
            <th scope="row">
            <?php echo $donneesAffichage['id']; ?>
            </th>     
            <td><?php echo $donneesAffichage['nom']; ?></td>
            <td><?php echo $donneesAffichage['adresse']; ?></td>
            <td><?= $ouverture ?></td>
            <td><?= $fermeture ?></td>
            <td><?php echo $donneesAffichage['cp']; ?></td>
            <td><?php echo $donneesAffichage['ville']; ?></td>


            <form action="" method="POST">
                <td>
                    <button type="submit" name="modif_relais" value ="<?=$donneesAffichage['id']?>" class="btn btn-danger btn-sm" style="margin-left:-10%">Modifier</button></td>
                <td>
                    <button type="submit" name="suppr_relais" value ="<?=$donneesAffichage['id']?>" style="margin-left: -10%" class="btn btn-danger btn-sm">Supprimer</button></td>
            </form>
                
            </tr>
            <?php
    }}
    ?>
        </tbody>
    </table>
</div>