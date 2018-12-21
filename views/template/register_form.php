<div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="RegisterModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="RegisterModalLabel"><a><img src="views/template/eLocation.png" style="width: 30%"></a> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>M'inscrire :</h3>
        <form action="" method="POST" onsubmit="return verifForm(this)">
          <div class="form-group">

            <label for="recipient-name" class="col-form-label">Mail :</label>
            <input required type="email" class="form-control" name="mail" onblur="verifMail(this)" placeholder="example@mail.com">

          </div>
          <div class="form-group">

            <label for="recipient-name" class="col-form-label">Pseudo :</label>
            <input required type="text" class="form-control" name="pseudo" onblur="verifPseudo(this)" placeholder="15 caractères maximum">

          </div>
          <div class="form-group">

            <label for="recipient-name" class="col-form-label">Mot de passe :</label>
            <input required type="password" class="form-control" name="mdp" onblur="verifMdp(this)" placeholder="8 caractères minimun">

          </div>
          <div class="form-group">

            <label for="recipient-name" class="col-form-label">Prenom :</label>
            <input required type="text" class="form-control" name="prenom" onblur="verifPrenom(this)">

          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nom :</label>
            <input required type="text" class="form-control" name="nom" onblur="verifNom(this)">
          </div>
          <div class="form-group">
             <label for="recipient-name" class="col-form-label">Adresse postale :</label>
             <input required type="text" class="form-control" name="adresse" onblur="verifAdresse(this)">
          </div>
          <div class="form-group">
          Sexe : </br>
          <select name="sexe" >
            <option value="H">Homme</option>
            <option value="F">Femme</option>
          </select>
          </div>
          <div class="form-group">
             <label for="recipient-name" class="col-form-label">Code Postal :</label>
             <input required type="number" max="95999" size="5" class="form-control" name="cp" placeholder="ex : 75000" onblur="verifCp(this)">
          </div>
          <div class="form-group">
             <label for="recipient-name" class="col-form-label">Ville :</label>
             <input required type="text" class="form-control" name="ville" placeholder="ex : Paris" onblur="verifVille(this)">
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
