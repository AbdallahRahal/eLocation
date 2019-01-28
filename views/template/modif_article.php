<?php

function modif_article ($info) {
?>
<div style="margin-left: 20%;margin-top: 8%;">
<div class="custom-control custom-checkbox my-1 mr-sm-2">
<input onclick="$('#nom').attr('readonly', false);$('#description ').attr('readonly', false);$('#prix_journee ').attr('readonly', false);$('#statut ').attr('disabled', false);$('#etat').attr('disabled', false);$('#m_sub').attr('disabled', false);$('#lien_photo').attr('disabled', false);" type="checkbox" class="custom-control-input" id="customControlInline" name="">
<label class="custom-control-label" for="customControlInline">Cochez pour modifier les infos de l'article</label>
  </div>


    <form action="" enctype="multipart/form-data" method="post">
      <input type="hidden" name="page" value="accueil">
      <input type="hidden" name="rub" value="cat">
      <input type="hidden" name="id" value="<?=$info['id']?>">
      <input type="hidden" name="reste" value="<?=$info['lien_photo']?>">
    <?php
    foreach ($info as $key => $value) {
      echo($key != "id" && $key != "etat" && $key != "statut" && $key != "lien_photo") ?
      "<h5>$key</h5><input type='text' class='form-control' style='max-width:40%;' id='$key' readonly='true' value='$value' name='$key'>
      ": "";
      if($key == "etat") {
        echo "<br>
        <select class='custom-select' style='max-width:7%;' disabled='' id='$key' name='etat'>
          <option value='neuf'>neuf</option>
          <option value='abime'>abime</option>
        </select>";
      }elseif($key == "lien_photo") {
        echo "
             Lien photo :<input id='$key' type='file' disabled='' name='lien_photo' value='$value' >";
      }elseif($key == "statut") {
        echo "<br>
        <select class='custom-select' style='max-width:7%;' disabled='' id='$key' name='statut'>
          <option value='$value'>$value</option>
        </select>";
      }     
    } ?>
<br>
<button class="btn btn-outline-success" id="m_sub" disabled="" type="submit" name="envoyer">Modifier</button>
</form>
<?php
} ?>
</div>
<?php

?>