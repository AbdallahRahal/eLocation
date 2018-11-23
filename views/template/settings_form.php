<div class="modal fade" id="SettingsModal" tabindex="-1" role="dialog" aria-labelledby="SettingsModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="SettingsModalLabel"><a class="navbar-brand"><img src="views/template/eLocation.png" style="width: 30%"></a> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="" method="post">
      <div class="modal-body">
        <h3>Modification du compte:</h3>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Mot de passe actuel:</label>
            <input required type="Password" name="mdp" class="form-control" id="message-text">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nouveau mot de passe:</label>
            <input required type="Password" name="newmdp" class="form-control" id="message-text">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="modification" value="true" class="btn btn-primary">Modifier</button>
        </div>
        </form>
    </div>
  </div>
</div>