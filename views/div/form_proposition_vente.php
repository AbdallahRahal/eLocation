<div class="container" style="max-width: 60%;margin-top: 8%">
<form>
<div class="form-group">
<label for="exampleFormControlTextarea1">Catégorie :</label>
    <select class="custom-select" required>
      <option value="">--Catégorie--</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
</div>
<div class="form-group">
<label for="exampleFormControlTextarea1">Titre de l'annonce :</label>
<input class="form-control" type="text">
</div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Texte de l'annonce :</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
</div>
<label for="file" class="label-file" style="max-width: 15%;"><p>Image principale :</p><p><img src="views/template/photo.png" style="height:14%;"></p></label>
<input id="file" class="input-file" type="file">
<label for="file" class="label-file" style="max-width: 15%;"><p>Image secondaire :</p><p><img src="views/template/photo.png" style="height:14%;"></p></label>
<input id="file" class="input-file" type="file">
<p><button class="btn btn-primary" type="submit">Envoyer</button></p>
</form>
</div>