<div class="container" style="max-width: 60%;margin-top: 5%">
  <br><h2>Mes Catégories</h2><br>
    <table class="table table-striped table-hover" style="align-center: auto;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <form action="" method="POST">
        <tr><th scope="row"></th>
            <td><input required type="text" class="form-control" name="nom"></td>
            <td></td>
            <td><button type="submit"  name="ajout_cat" value="true" class="btn btn-danger btn-sm" style="margin-left: 52%">Ajouter</button></td>
        </tr>
        </form>
        <?php
        
    foreach($mes_categories as $id => $nom){
        ?><form action="" method="POST">
            
            <?php if(isset($_POST['modif_cat']) && $_POST['modif_cat'] == $id ){?>
            
            <tr>
                <th scope="row">
                <?php echo $id; ?>
                </th>
            
            <td>
                <input required type=text <?=$nom?> name='nom' value='<?=$nom?>' class="form-control">
            </td>   
            <td>
                <button type="submit" name="valid_modif_cat" value ="<?=$id?>" class="btn btn-danger btn-sm" style="margin-left: 95%">Valider</button>
            </td>
            <td>
                <a href="" ><button type="submit" name="retour_cat" class="btn btn-danger btn-sm" style="margin-left: 40%">Retour</button> </a>
            </td>
            </tr>
            </form>
        
        <?php  }else{
            ?>
            <tr>
                <th scope="row">
                <?php echo $id; ?>
                </th>
            <td>
                <?php echo $nom; ?>
            </td>
                
                
            <td>
                <button type="submit" name="modif_cat" value ="<?=$id?>" class="btn btn-danger btn-sm" style="margin-left: 95%">Modifier</button></td>
            <td>
                <button type="submit" name="suppr_cat" value ="<?=$id?>" class="btn btn-danger btn-sm" style="margin-left: 40%">Supprimer</button></td>
            </tr>
            
            
            </form>
            <?php
            
    }}
    ?>
        </tbody>
    </table>
</div>