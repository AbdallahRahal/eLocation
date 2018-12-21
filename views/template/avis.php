<div class="" style="margin-left: 20%;margin-top: 100px">
<p><h2>Laisser un avis</h2></p>

<form action="" method="get">

<input type='hidden' name='page' value='accueil' >
<input type='hidden' name='rub' value='avis' >
<input type='hidden' name='idloue' value=<?=$idloue?> >
Commentaire : <br>
<textarea required name="commentaire"></textarea>
<br>Note<br>
<select name='note'>
    <option value=0>0</option>
    <option value=1>1</option>
    <option value=2>2</option>
    <option value=3>3</option>
    <option value=4>4</option>
    <option default value=5>5</option>
</select>
<button type='submit' value='true' name='avis'>Envoyer</button>
</form>
</div>