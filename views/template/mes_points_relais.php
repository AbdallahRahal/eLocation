<div class="container" style="max-width: 80%;margin-top: 5%">
  <br><h2>Mes Points Relais</h2><br>
    <table class="table table-striped table-hover" style="align-center: auto;">
        <thead class="thead-dark">
            <tr>
                
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Nom</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Adresse</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Ouverture</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Fermeture</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Code Postal</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Ville</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;"></th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;"></th>
            </tr>
        </thead>
        <tbody>
        <form action="" method="POST" onsubmit="return verifForm(this)">
        <tr>
            <td><input required type="text" class="form-control" name="nom" style="max-width: 90%" onblur="verifRelais(this)"></td>
            <td><input required type="text" class="form-control" name="adresse" style="max-width: 90%" onblur="verifAdresse(this)"></td>
            <td><input required type="time" class="form-control" name="ouverture" style="max-width: 100%" ></td>
            <td><input required type="time" class="form-control" name="fermeture" style="max-width: 100%"></td>
            <td><input required type="text" class="form-control" name="cp" style="max-width: 65%" onblur="verifCp(this)"></td>
            <td><input required type="text" class="form-control" name="ville" style="max-width: 80%" onblur="verifVille(this)"></td>
            <td></td>
            <td><button type="submit"  name="ajout_relais" value="true" class="btn btn-warning btn-sm" style="margin-left: 0%">Ajouter</button></td>
        </tr>
        </form>
        <?php
        
    while($donneesAffichage = $donnees_relais->fetch()){
            $ouverture = substr($donneesAffichage['ouverture'], 0, 5);
            $fermeture = substr($donneesAffichage['fermeture'], 0, 5);
            ?><form action="" method="POST" onsubmit="return verifForm(this)">
           
            <?php if(isset($_POST['modif_relais']) && $_POST['modif_relais'] == $donneesAffichage['id'] ){?>
            
            <tr>   
            <td>
                <input required type=text <?=$donneesAffichage['nom']?> name='nom' value='<?=$donneesAffichage['nom']?>' class="form-control" style="max-width: 90%" onblur="verifRelais(this)">
            </td>
            <td>
                <input required type=text <?=$donneesAffichage['adresse']?> name='adresse' value='<?=$donneesAffichage['adresse']?>' class="form-control" onblur="verifAdresse(this)">
            </td>
            <td>
                <input required type=time <?=$ouverture?> name='ouverture' value='<?=$ouverture?>' class="form-control" style="max-width: 100%">
            </td>
            <td>
                <input required type=time <?=$fermeture?> name='fermeture' value='<?=$fermeture?>' class="form-control" style="max-width: 100%">
            </td>
            <td>
                <input required type=text <?=$donneesAffichage['cp']?> name='cp' value='<?=$donneesAffichage['cp']?>' class="form-control" style="max-width: 65%" onblur="verifCp(this)">
            </td>
            <td>
                <input required type=text <?=$donneesAffichage['ville']?> name='ville' value='<?=$donneesAffichage['ville']?>' class="form-control" style="max-width: 80%" onblur="verifVille(this)">
            </td>
            <td>
                <button type="submit" name="valid_modif_relais" value ="<?=$donneesAffichage['id']?>" class="btn btn-warning btn-sm" style="margin-left:-10%">Valider</button>
            </td>
            <td>
                <a href=""><button type="submit" name="retour_relais" style="margin-left: -10%" class="btn btn-warning btn-sm">Retour</button></a>
            </td>
            </tr>
            </form>
            
            <?php }else{
            ?>
            
            <tr>    
            <td><?php echo $donneesAffichage['nom']; ?></td>
            <td><?php echo $donneesAffichage['adresse']; ?></td>
            <td><?= $ouverture ?></td>
            <td><?= $fermeture ?></td>
            <td><?php echo $donneesAffichage['cp']; ?></td>
            <td><?php echo $donneesAffichage['ville']; ?></td>


            <form action="" method="POST">
                <td>
                    <button type="submit" name="modif_relais" value ="<?=$donneesAffichage['id']?>" class="btn btn-warning btn-sm" style="margin-left:-10%">Modifier</button></td>
                <td>
                    <button type="submit" name="suppr_relais" value ="<?=$donneesAffichage['id']?>" style="margin-left: -10%" class="btn btn-warning btn-sm">Supprimer</button></td>
            </form>
                
            </tr>
            <?php
    }}
    ?>
        </tbody>
    </table>
</div>