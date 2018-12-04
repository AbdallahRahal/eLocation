<div class="" style="margin-left: 20%;margin-top: 100px">
<p><h2>Location d'article</h2></p>

Informations:

<form action="" method="GET">
<input type='hidden' value=<?=$_GET['page']?> name='page'>
<input type='hidden' value=<?=$_GET['rub']?> name='rub'>
<input type='hidden' value=<?=$_GET['cat']?> name='cat'>
<input type='hidden' value=<?=$_GET['art']?> name='art'>
<input type='hidden' value=<?=$_GET['louer_article']?> name='louer_article'>


Point relais :
<select name="point_relais"> 
    <?php
    
    
    for($x=0;$x<count($point_relais);$x++){
        $ouverture = substr($point_relais[$x]['ouverture'], 0, 5);
        $fermeture = substr($point_relais[$x]['fermeture'], 0, 5);
        echo"<option> ".$point_relais[$x]['nom']."   ".$ouverture."-".$fermeture."</option>";
    }
    ?>
    </select>

    
    
    <br><br><button type="submit" name="valider" value="true" class="btn btn-danger btn-sm">Louer</button>

</form>
</div>