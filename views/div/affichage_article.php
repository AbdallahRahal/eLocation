 <?php
 function affichage_article ($affiche) { ?>
 <div class="album py-5 bg-light" style="margin-left: 20%;margin-top: 100px">
      <div class="container">

        <div class="row">
          <?php for($i=0; $i<count($affiche);$i++ ) { ?>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="https://cache.magazine-avantages.fr/data/photo/w1000_ci/1bk/fruits-legume-hiver.jpg" class="card-img-top"  alt="Card image cap">
              <div class="card-body">
                <p class="card-text"><?= $affiche[$i][1] ?> .</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
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