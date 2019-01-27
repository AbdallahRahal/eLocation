<?php


function affichage_page_vente ($art, $commentaire) { ?>
 <div class="card" style="margin-left: 20%;margin-top: 7%;">
 <?php
 if($art['promo']>0) {
  echo '<span class="badge badge-danger" style="float:right;">'.$art['promo'].' % de réduction</span>';
  }
  ?>
  <center>
  <img class="card-img-top" style="width: 300px;height: 300px;" src="views/img/<?=$art['lien_photo']?>" alt="Card image cap">
</center>
  <div class="card-body">
    <h3 class="card-title"><?=$art['Nom']?></h3>
    <p class="card-text"><br><?= $art['description'] ?></p>
  </div>
    <form action="" method="GET">
    <input type='hidden' value=<?=$_GET['page']?> name='page'>
    <input type='hidden' value=<?=$_GET['rub']?> name='rub'>
    <input type='hidden' value=<?=$_GET['cat']?> name='cat'>
    <input type='hidden' value=<?=$_GET['art']?> name='art'>
    <input type='hidden' value=<?=$art['id']?> name='louer_article'>
    <ul class="list-group list-group-flush">
    <?php

if(!empty($commentaire)) {
  $y=0;
  $moy=0;
  for($x=0;$x<count($commentaire); $x++) {
    $moy+=$commentaire[$x]['note'];
    $y++;
  }
  $moy=$moy/$y;  
  

  echo" <li class='list-group-item'><h5>Note : ".$moy."/5</h5><br><h5>Commentaire : </h5></li>";
}
echo"<form action='' method=POST>";
if(!empty($commentaire)) {

    for($x=0;$x<count($commentaire); $x++){

      if($_SESSION['compte'] == 'admin') {
            echo "<li class='list-group-item'>".$commentaire[$x]['commentaire']."".$commentaire[$x]['note']."<button type=submit name='suppr_commentaire' value =".$commentaire[$x]['louer_id']." >Supprimer</button></li>";
        
      }elseif(isset($_SESSION['id']) && $_SESSION['id'] == $commentaire[$x]['utilisateur_id']){

        if(isset($_POST['modif_commentaire']) && $_POST['modif_commentaire'] ==$commentaire[$x]['louer_id'] ){

          echo "<li class='list-group-item'><input type=text required name=nouveauComm value=".$commentaire[$x]['commentaire'].">
          <Select  name=nouveauNote>  >
          <option selected  value=".$commentaire[$x]['note']."> ".$commentaire[$x]['note']."</option>
          <option value=1 >1</option>
          <option value=2 >2</option>
          <option value=3 >3</option>
          <option value=4 >4</option>
          <option value=5 >5</option>
          
          </select>
          <button type=submit value= ".$commentaire[$x]['louer_id']." name='valider_modif_commentaire' >Valider</button></li> ";
    
        }else{
          echo "<li class='list-group-item'>".$commentaire[$x]['commentaire']."".$commentaire[$x]['note']." <button type=submit name='modif_commentaire' value =".$commentaire[$x]['louer_id']." >Modifier</button><button type=submit name='suppr_commentaire' value =".$commentaire[$x]['louer_id']." >Supprimer</button></li>";
        }
        
      }else{
        echo "<li class='list-group-item'>".$commentaire[$x]['commentaire']."".$commentaire[$x]['note']."</li>";
      }
      
    }
    
}else{
        echo "<li class='list-group-item'>Cet article n'as pas de commentaire</li>";
}


echo"</ul></form>
<div class='card-body'>";

if(verif_article_dispo($_GET['art'])==false){
  echo' <p class="btn btn-danger btn-sm">Non disponible</p>';
}else{
    echo'<button type="submit" class="btn btn-danger btn-sm">Louer</button>';
}

echo''.($art['prix_journee']-($art['promo']/100)*$art['prix_journee']).'€/jour';

?> 
     </div></div></form> 
   
<?php
} ?>