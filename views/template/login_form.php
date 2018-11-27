<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><a><img src="views/template/eLocation.png" style="width: 30%"></a> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>Me connecter :</h3>
        <form action="" method="POST">

        <?php if(isset($_GET['page'])){
         echo"<input required type='hidden' name='page' value='".$_GET['page']."' >";
        }else{
          echo"<input required type='hidden' name='page' value='accueil' >";

        }if(isset($_GET['rub'])){
          echo"<input required type='hidden' name='rub' value='".$_GET['rub']."' >";
        }?>

          <div class="form-group">
            <div class="alert alert-danger" id="alerterror" role="alert" style="display:none;">
              <strong>Erreur!</strong> PTDR T KI?
            </div>
            <label for="recipient-name" class="col-form-label">Identifiant ou Mail:</label>
            <input required type="text" class="form-control" name="identifiant" id="recipient-name">

          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Password:</label>
            <input required type="password" class="form-control" name="mdp" id="message-text">
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" name="connexion" value="true" class="btn btn-primary">Se connecter</button>
      </div>
      </form>
    </div>
  </div>
</div>