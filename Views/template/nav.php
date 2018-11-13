    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" 
      <?php if( !isset($_GET['page']) || $_GET['page'] != "accueil"  ) {  ?>
       href="index.php">Eval</a> 
     <?php } else {  ?> 
       href="">Eval</a> 
    <?php  } ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com/" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
            <?php if(!isset($_GET['page']) ||  $_GET['page'] != "accueil" ) {  ?>
              <a class="dropdown-item" href="index.php?page=login"> Se connecter</a>
            <?php } else  { ?>
              <a class="dropdown-item" href="index.php?page=login&&act=deconnecter"> Se deconnecter</a>
            <?php } ?>
            </div>
          </li>
        </ul>
      </div>
    </nav>