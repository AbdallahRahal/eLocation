<div class="container" style="max-width: 60%;margin-top: 8%">

<form action="" method="POST" action="" enctype="multipart/form-data" onsubmit="return verifForm(this)">
    <input type='hidden' name='page' value='accueil' >
    <input type='hidden' name='rub' value='proposition' >
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Titre de l'annonce :</label>
        <input required class="form-control" type="text" name="titre" onblur="verifRelais(this)">   
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Texte de l'annonce:</label>
        <textarea required placeholder="Ici vous pouvez faire une proposition de reprise a un administrateur, cette administrateur vous feras en retour une offre de reprise" class="form-control" id="exampleFormControlTextarea1" rows="2" name="description"></textarea>
    </div>
    <label for="file" class="label-file" style="max-width: 15%;"><p>Image principale :</p><p><img src="views/template/photo.png" style="height:14%;"></p></label>
     <input required type="file" name="icone" id="mon_fichier" /><br />
    <p><button class="btn btn-primary" name="proposition" value="true" type="submit">Envoyer</button></p>
    <div class="form-group">
</form>
</div>