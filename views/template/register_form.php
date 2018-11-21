<div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="RegisterModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="RegisterModalLabel"><a class="navbar-brand"><img src="views/template/eLocation.png" style="width: 30%"></a> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>M'inscrire :</h3>
        <form action="" method="POST">
          <div class="form-group">

            <label for="recipient-name" class="col-form-label">Mail :</label>
            <input type="mail" class="form-control" name="mail" id="recipient-mail">

          </div>
          <div class="form-group">

            <label for="recipient-name" class="col-form-label">Pseudo :</label>
            <input type="text" class="form-control" name="pseudo" id="recipient-pseudo">

          </div>
          <div class="form-group">

            <label for="recipient-name" class="col-form-label">Mot de passe :</label>
            <input type="password" class="form-control" name="mdp" id="recipient-mail">

          </div>
          <div class="form-group">

            <label for="recipient-name" class="col-form-label">Prenom :</label>
            <input type="text" class="form-control" name="prenom" id="recipient-prenom">

          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nom :</label>
            <input type="text" class="form-control" name="nom" id="message-nom">
          </div>
          <div class="form-group">
             <label for="recipient-name" class="col-form-label">Adresse postale :</label>
             <input type="text" class="form-control" name="adresse" id="recipient-prenom">
          </div>
          <div class="form-group">
          Sexe : </br>
          <select name="sexe" >
            <option value="H">Homme</option>
            <option value="F">Femme</option>
          </select>
          </div>
          <div class="form-group">
             <label for="recipient-name" class="col-form-label">Code Postale :</label>
             <input type="number" max="99999" min="0" class="form-control" name="cp" id="recipient-prenom">
          </div>
          <div class="form-group">
             <label for="recipient-name" class="col-form-label">Ville :</label>
             <input type="text" class="form-control" name="ville" id="recipient-prenom">
          </div>
        </div>
          <div class="modal-footer">
            <button type="submit" name="inscription" value="true" class="btn btn-primary">S'inscrire</button>
          </form>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          </div>
    </div>
  </div>
</div>
