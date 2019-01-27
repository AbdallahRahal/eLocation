<?php
function aff_loc ($locations) { ?>

<div class="container" style="max-width: 60%;margin-top: 5%">
  <br><h2>Mes Locations</h2><br>
    <table class="table table-striped table-hover" style="align-center: auto;">
        <thead class="thead-dark">
            <tr>
                
                <th scope="col">Nom</th>
                <th scope="col">Articles</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody> 

 <?php $i =1; //var_dump($locations);
    if(!empty($locations)) {
    while($i<=count($locations)) { //var_dump($locations);
        $envoi[0] = $locations[$i][2]; //action
        $envoi[1] = $locations[$i][3]; //article
        $envoi[2] = $locations[$i][4]; //utilisateur
        $envoi[3] = $locations[$i][5]; // mail
        $envoi[4] = $locations[$i][0]; //nom utilisateur
        $t1 = strval($envoi[3]);
        $t2 = strval($envoi[4]);
        //var_dump($envoi);

        ?>
            <tr>
            <td>
                <?php echo $locations[$i][0]; ?>
            </td>
            <td>
                <?php echo $locations[$i][1]; ?>
            </td>
            <td>
                <button type="submit" onclick="document.getElementById('var0').value = <?= $envoi[0]?>;document.getElementById('var1').value = <?= $envoi[1]?>;document.getElementById('var2').value = <?= $envoi[2]?>;<?php $_SESSION['uti_mail'] = $envoi[3]; $_SESSION['nom_uti'] = $envoi[4]; ?>" class="btn btn-primary" data-toggle="modal" data-target="#Rendre_Art" class="btn btn-danger btn-sm" href="" style="margin-left: 50%;">Rendre</button>
            </td>
            </tr>
            <?php $i++;
    
    }
    
    } else {
        echo "<tr><td>pas de locations</td><td></td><td></td></tr>";
    }
    
    ?> 
    </tbody>
    </table>
	</div>
<?php
}
?>
