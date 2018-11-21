<div class="modal fade" id="SettingsModal" tabindex="-1" role="dialog" aria-labelledby="SettingsModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="SettingsModalLabel"><a class="navbar-brand"><img src="views/template/eLocation.png" style="width: 30%"></a> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>Modifier mes informations personelles :</h3>
        <form action="popo" method="">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Mail:</label>
            <input type="Mail" name="mail" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Pseudo:</label>
            <input type="text" name="pseudo" class="form-control" id="message-text"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Mot de passe actuel:</label>
            <input type="Password" name="mdp" class="form-control" id="message-text"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nouveau mot de passe:</label>
            <input type="Password" name="nouveau_mdp" class="form-control" id="message-text"></textarea>
          </div>
        
           </div>
            <div class="modal-footer">
          <button type="button" name="modifier" value="true" class="btn btn-primary">Modifier</button>
          </form>
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>

            <input type="Mail" class="form-control" id="recipient-change_mail">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Pseudo:</label>
            <input type="text" class="form-control" id="recipient-change_pseudo"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Mot de passe actuel:</label>
            <input type="Password" class="form-control" id="recipient-ancien_mdp"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nouveau mot de passe:</label>
            <input type="Password" class="form-control" id="recipient-nv_mdp"></textarea>
          </div>
    </div>
  </div>
</div>