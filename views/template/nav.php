<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" >
  <a class="navbar-brand" href="index.php" style="width:90px;height: 80px">
    <img src="views/template/eLocation.png" width="200%">
  </a> 
  <div class="collapse navbar-collapse" id="navbarsExampleDefault"  >
    <ul class="navbar-nav mr-auto" style="position:absolute;right:0px">
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="https://example.com/" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i style="font-size: 43px" class="fas fa-user"></i><?php if(!isset($_SESSION['compte'])) { echo "Mon compte"; }else{ echo $_SESSION['pseudo']; } ?> </a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <?php if(!isset($_SESSION['compte'])) {    ?>
          <a class="dropdown-item" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" href=""> Se connecter</a>
          <a class="dropdown-item" class="btn btn-primary" data-toggle="modal" data-target="#RegisterModal" href=""> S'inscrire</a>
          <?php  }else{   ?>
          <a class="dropdown-item" class="btn btn-primary" data-toggle="modal" data-target="#SettingsModal" href=""> Paramètres du compte</a>
          <a class="dropdown-item" class="btn btn-primary" data-toggle="modal" data-target="#" href="controllers/deco.php"> Deconnexion</a>
        <?php  }      ?>
        </div>
      </li>
    </ul>
  </div>
</nav>