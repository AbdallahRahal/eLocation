<div class="container" style="max-width: 60%;margin-top: 5%">
  <br><h2>Mes Catégories</h2><br>
    <table class="table table-striped table-hover" style="align-center: auto;">
        <thead class="thead-dark">
            <tr>
                
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Nom</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Promotion</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;"></th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;"></th>
            </tr>
        </thead>
        <tbody>
        <form action="" method="POST" onsubmit="verifForm(this)">
        <tr>
            <td><input required type="text" class="form-control" name="nom" onblur="verifNom(this)"></td>
            <td><input required type="number" max='100' min='0' name="promo" ></td>
            <td></td>
            <td><button type="submit"  name="ajout_cat" value="true" class="btn btn-warning btn-sm" style="margin-left: 52%">Ajouter</button></td>
        </tr>
        </form>
        <?php
        
    foreach($mes_categories as $id => $table){
        ?><form action="" method="POST" onsubmit="verifForm(this)">
            
            <?php if(isset($_POST['modif_cat']) && $_POST['modif_cat'] == $id ){?>
            
            <tr>
            <td>
                <input required type=text  name='nom' value='<?=$table['nom']?>' class="form-control" onblur="verifNom(this)">
            </td>  
            <td>
                <input required type=number  name='promo' value='<?=$table['promo']?>'   max='100' min='0' >
            </td>
            <td>
                <button type="submit" name="valid_modif_cat" value ="<?=$id?>" class="btn btn-warning btn-sm" style="margin-left: 95%">Valider</button>
            </td>
            <td>
                <a href="" ><button type="submit" name="retour_cat" class="btn btn-warning btn-sm" style="margin-left: 40%">Retour</button> </a>
            </td>
            </tr>
            </form>
        
        <?php  }else{
            ?>
            <tr>
            <td>
                <?php echo $table['nom']; ?>
            </td>
            <td>
                <?php echo $table['promo'].' %'; ?>
            </td>
                
                
            <td>
                <button type="submit" name="modif_cat" value ="<?=$id?>" class="btn btn-warning btn-sm" style="margin-left: 95%">Modifier</button></td>
            <td>
                <button type="submit" name="suppr_cat" value ="<?=$id?>" class="btn btn-warning btn-sm" style="margin-left: 40%">Supprimer</button></td>
            </tr>
            
            
            </form>
            <?php
            
    }}
    ?>
        </tbody>
    </table>
</div>