<div class="" style="margin-left: 20%;margin-top: 100px">
<p><h2>Location d'article</h2></p>

<form action="" method="GET">
<input type='hidden' value=<?=$_GET['page']?> name='page'>
<input type='hidden' value=<?=$_GET['rub']?> name='rub'>
<input type='hidden' value=<?=$_GET['cat']?> name='cat'>
<input type='hidden' value=<?=$_GET['art']?> name='art'> 
<input type='hidden' value=<?=$_GET['louer_article']?> name='louer_article'>

<br>
<h5>Choississez votre point relais :</h5><br>
<select class="custom-select" onchange="change_point('2');" id="point_relais" name="point_relais"> 
    <?php
    
    for($x=0;$x<count($point_relais);$x++){
        $ouverture = substr($point_relais[$x]['ouverture'], 0, 5);
        $fermeture = substr($point_relais[$x]['fermeture'], 0, 5); ?>
        <option value="<?=$point_relais[$x]['id']?>">
<?php   

echo $point_relais[$x]['adresse']." / ".$ouverture."-".$fermeture."</option>";
    }
    ?>
</select><br><br>
<iframe width="300%" height="300" id="maps" class="z-depth-3" src="https://maps.google.com/maps?q=<?=$point_relais[0]['adresse']?>&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><br>
    <h5>Date de rendu:</h5><br>
<input class='form-control' style='max-width: 40%;' required type='date' name='date_butoire' min='<?=date("Y-m-d")?>' max='<?=date("Y-m-d", mktime(0, 0, 0, date("m")+1, date("d"), date("Y")));?>'>

<br><br>

<?php

if(verif_article_dispo($_GET['louer_article'])==false){
    echo' <p class="btn btn-outline-danger disabled ">Non disponible</p>';
}elseif(isset($_SESSION['compte']) && $_SESSION['compte'] == 'utilisateur' ) {
    echo'<button type="submit" name="valider" value="true" class="btn btn-outline-success">Louer</button>';
}else { echo' <p class="btn btn-outline-danger disabled">Vous devez être connecté</p>';
}
?>
</form>
</div>