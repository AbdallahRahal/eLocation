<div class="container" style="max-width: 60%;margin-top: 8%">
<form action="" method="GET">
<input  type='hidden' name='page' value='accueil' >
<div class="form-group">

<label for="exampleFormControlTextarea1">Titre de l'annonce :</label>
<input class="form-control" type="text" name="titre">
</div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Texte de l'annonce :</label>
    <textarea placeholder="Ici vous pouvez faire une proposition de reprise a un administrateur(qui est beau goss), cette administrateur vous feras en retour une offre de reprise" class="form-control" id="exampleFormControlTextarea1" rows="2" name="description"></textarea>
</div>
<label for="file" class="label-file" style="max-width: 15%;"><p>Image principale :</p><p><img src="views/template/photo.png" style="height:14%;"></p></label>
<input id="file" class="input-file" type="file" name="img1">
<label for="file" class="label-file" style="max-width: 15%;"><p>Image secondaire :</p><p><img src="views/template/photo.png" style="height:14%;"></p></label>
<input id="file" class="input-file" type="file" name="img2">
<p><button class="btn btn-primary" name="proposition" value="true" type="submit">Envoyer</button></p>
<div class="form-group">
</form>
</div>