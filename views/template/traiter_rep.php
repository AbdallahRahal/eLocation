<div class="modal fade" id="RepriseModal" tabindex="-1" role="dialog" aria-labelledby="RepriseModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="RepriseModalLabel"><a><img src="views/template/eLocation.png" style="width: 30%"></a> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="" method="get">
        <input type='hidden' name='page' value='accueil'>
            <input type='hidden' name='rub' value='reprises'>
      <div class="modal-body">
        <h3>Traitement de la reprise</h3><br>
          <div class="form-check">
            Proposer un prix :<br>
            <input required type="number" min ="0" max="9999" name="prix_proposer" class="form-control form-check-inline" id="message-text" style="width: 25%;"><span style="font-size:30px">€<span>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" id="tonModal" class="btn btn-primary" name="produit" value="">Proposer</button>
        </div>
        </form>
    </div>
  </div>
</div>