<?php

function modif_article ($info) { var_dump($info); die(); ?>
<div style="width:43%">
<label style="cursor: pointer;color: #00b1ca;" for="file" class="label-file">Changer mon image</label>
<input style="display: none;" id="file" class="input-file" type="file">
<img style="border-color: #9c0e0e;border: 5px solid blue;border-radius: 40%;width: 200px;float: left;" src="https://betanews.com/wp-content/uploads/2016/04/penguingun-600x600.jpg">
<br>
  <input onclick="$('#m_pseudo').attr('readonly', false);$('#m_email').attr('readonly', false);$('#m_password').attr('readonly', false);$('#m_sub').attr('disabled', false);" type="checkbox" name=""><br>
Cliques pour modifier tes info personelles
<table style='width: 390px;float: right;margin-top: 40px' class="table">
  <tbody>
    <form action="" method="post">
    <?php 
    foreach ($info as $key => $value) { ?>
      <tr>
        <td>$key</td><td><input type="text" id="" readonly="true" name="$key" value="<?=$value?>"></td>
      </tr>
     } ?>
  </tbody>
</table>
</div>
<div style="margin-top: 15%;margin-left: 40%; ">
<input id="m_sub" disabled="" type="submit" name="envoyer">
</form>
</div>
<?php
}

?>