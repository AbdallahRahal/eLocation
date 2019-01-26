<?php

function modif_article ($info) {
?>
<div style="margin-left: 20%;margin-top: 200px;">

<input onclick="$('#nom').attr('readonly', false);$('#description ').attr('readonly', false);$('#prix_journee ').attr('readonly', false);$('#statut ').attr('disabled', false);$('#etat').attr('disabled', false);$('#m_sub').attr('disabled', false);$('#lien_photo').attr('disabled', false);" type="checkbox" name="">
Cliques pour modifier tes info personelles

<table style='' class="table">
  <tbody>
    <form action="" enctype="multipart/form-data" method="post">
      <input type="hidden" name="page" value="accueil">
      <input type="hidden" name="rub" value="cat">
      <input type="hidden" name="id" value="<?=$info['id']?>">
      <input type="hidden" name="reste" value="<?=$info['lien_photo']?>">
    <?php
    foreach ($info as $key => $value) {
      echo($key != "id" && $key != "etat" && $key != "statut" && $key != "lien_photo") ?
      "<tr>
        <td>$key</td><td><textarea id='$key' readonly='true' name='$key'>$value</textarea></td>
      </tr>": "<tr><td>$key</td><td>";
      if($key == "etat") {
        echo "
        <select disabled='' id='$key' name='etat'>
          <option value='neuf'>neuf</option>
          <option value='abime'>abime</option>
        </select></td></tr>";
      }elseif($key == "lien_photo") {
        echo "
             <input id='$key' type='file' disabled='' name='lien_photo' value='$value' ></td></tr>";
      }elseif($key == "statut") {
        echo "
        <select disabled='' id='$key' name='statut'>
          <option value='$value'>$value</option>
        </select></td></tr>";
      }     
    } ?>
  </tbody>
</table>
<input id="m_sub" disabled="" type="submit" name="envoyer">
</form>
<?php
} ?>
</div>
<?php

?>