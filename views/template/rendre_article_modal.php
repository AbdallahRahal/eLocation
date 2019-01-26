 <div class="modal fade" id="Rendre_Art" tabindex="-1" role="dialog" aria-labelledby="Rendre_ArtLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Rendre_ArtLabel"><a><img src="views/template/eLocation.png" style="width: 30%"></a> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="" method="POST">
      <div class="modal-body">
        <h3>Rendre un article :</h3>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Êtes-vous sur de vouloir rendre l'article ?</label>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" id="var1" name="art_id" value="">
          <input type="hidden" id="var2" name="uti_id" value="">
          <button type="submit" id="var0" name="action" value="" class="btn btn-warning btn-sm">Oui</button>
          <input type="hidden" id="var4" name="test" value="">
          <a href="" ><button type="submit" name="retour_rendre_article" class="btn btn-warning btn-sm">Non</button> </a>
        </div>
        </form>
    </div>
  </div>
</div>