 <?php
 function affichage_article ($affiche) { /*var_dump($affiche); die('isma');*/ ?>
 <div class="album py-5 bg-light" style="margin-left: 20%;margin-top: 100px">
      <div class="container">

        <div class="row">
          <?php for($i=0; $i<count($affiche);$i++ ) { ?>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm" style="">
              <img style="width: 230px" src="<?= $affiche[$i][4] ?>" class="card-img-top"  alt="Card image cap">
              <div class="card-body">
                <p class="card-text"><?= $affiche[$i][1] ?> .</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="index.php?page=<?=$_GET['page']?>&&rub=<?=$_GET['rub']?>&&cat=<?php if(isset($_GET['cat'])) { echo $_GET['cat']; }else{ }?>&&art=<?=$affiche[$i][3]?>" class="btn btn-sm btn-outline-secondary">Details</a>
                    <button type="button" class="btn btn-sm btn-outline-secondary">dispo</button>
                  </div>
                  <a class="text-muted"><?= $affiche[$i][2]."€/jour" ?></a>
                </div>
              </div>
            </div>
          </div>
        
        <?php }   ?>
          
          </div>
      </div> 
</div>
<?php
}
?>