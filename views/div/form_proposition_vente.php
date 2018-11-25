<div class="container" style="max-width: 60%;margin-top: 8%">
<form>
<div class="form-group">
<label for="exampleFormControlTextarea1">Catégorie :</label>
    <select class="custom-select" name="catv" required>
      <option value="">--Catégorie--</option>
      <option value="1">Foot</option>
      <option value="2">Tennis</option>
      <option value="3">Hiver</option>
      <option value="4">Eté</option>
    </select>
</div>
<div class="form-group">
<label for="exampleFormControlTextarea1">Titre de l'annonce :</label>
<input class="form-control" type="text" name="titre">
</div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Texte de l'annonce :</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="description"></textarea>
</div>
<label for="file" class="label-file" style="max-width: 15%;"><p>Image principale :</p><p><img src="views/template/photo.png" style="height:14%;"></p></label>
<input id="file" class="input-file" type="file" name="img1">
<label for="file" class="label-file" style="max-width: 15%;"><p>Image secondaire :</p><p><img src="views/template/photo.png" style="height:14%;"></p></label>
<input id="file" class="input-file" type="file" name="img2">
<p><button class="btn btn-primary" type="submit">Envoyer</button></p>
</form>
</div>