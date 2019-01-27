<main role="main" class="container">

      <div class="home" style="margin-top:12%;text-align: center;">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <?php
  $i=1;
  $lien_photo= array();
    while($donneesAffichage = $affichage_carrousel->fetch()){
      $lien_photo[$i] = $donneesAffichage['Photo'];
      $i++;
    }
        ?>
        <br><h2>Les derniers articles ajoutés</h2><br>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?=$lien_photo[1]?>" alt="Première slide" style="max-width: 40%;margin-left: 30%;margin-top: 5%;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?=$lien_photo[2]?>" alt="Seconde slide" style="max-width: 40%;margin-left: 30%;margin-top: 5%;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?=$lien_photo[3]?>" alt="Troisième slide" style="max-width: 40%;margin-left: 30%;margin-top: 5%;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?=$lien_photo[4]?>" alt="Quatrième slide" style="max-width: 40%;margin-left: 30%;margin-top: 5%;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?=$lien_photo[5]?>" alt="Cinquième slide" style="max-width: 40%;margin-left: 30%;margin-top: 5%;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Précédent</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Suivant</span>
  </a>
</div>
      </div>
</main>
