 <?php
 function affichage_article ($affiche) { /*var_dump($affiche); die('isma');*/ ?>
 <div class="album py-5 bg-light" style="margin-left: 20%;margin-top: 100px">
      <div class="container">
        <div style="margin-left: 85%;margin-top: 10px;">
        <input id="test1" type="text" placeholder="Rechercher..." name=""><br><br>
        <select id="testJs" name="trier">
          <option>Trier par</option>
          <option id="test2" value="Croissant" > Prix Croissant</option>
          <option id="test3" value="Décroissant" >Prix Décroissant</option>
        </select>
      </div>
        <div class="row" id="lists">
          <?php for($i=0; $i<count($affiche);$i++ ) { ?>
          <div id="card<?=$i?>" data-price="<?= $affiche[$i][2] ?>" class="col-md-4">
            <div class="card mb-4 shadow-sm" 
            <?php 
              if($affiche[$i][5] != "dispo") { 
               echo "style='background: linear-gradient(45deg, white 25%, #E8E8E8  25%, #E8E8E8  50%, white 50%, white 75%,#E8E8E8  75%); background-size: 100px 100px;' ";          
              }
              ?>
              >
              <div class="card-header" >
      
                <center><h4 id="titre<?=$i?>"><?= $affiche[$i][0] ?></h4></center>

              </div>
              <div class="card-body" style="max-height: 325px;min-height: 325px;">
              <center><img style="width: 230px" src="<?= $affiche[$i][4] ?>" class="card-img-top"  alt="Card image cap"></center>
                <p id="text<?=$i?>" class="card-text"><?= $affiche[$i][1] ?> </p>
              </div>
              <div class="card-footer" >

                <div class="d-flex justify-content-between align-items-center">
                    <a href="index.php?page=<?=$_GET['page']?>&rub=<?=$_GET['rub']?>&cat=<?=$affiche[$i][6] ?>&art=<?=$affiche[$i][3]?>" class="btn btn-warning">Louer</a>
              <p class="text-muted" 
                    <?php 
                    if($affiche[$i][5] != "dispo") { 
                      echo "style='background-color : red;'>Non diponible";        
                    }else{
                      echo">Diponible";
                    }
                    
               ?></p>
                  <a class="text-muted"><?= $affiche[$i][2]."€/jour" ?></a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
          </div>
      </div> 
</div>
   <script>$('#test1').keyup(function(){recherche(<?= $i; ?>);});</script>
   <script>$('#testJs').change(function(){tri(<?= $i; ?>);});</script>   

<?php
}
?>