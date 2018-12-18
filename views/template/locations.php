<?php
function aff_loc ($locations) { ?>

<div class="container" style="max-width: 35%;margin-top: 5%">
<p><h2>Locations</h2></p>
    <table class="table table-striped table-hover" style="align-center: auto;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">nom</th>
                <th scope="col">loc</th>
            </tr>
        </thead>
        <tbody> 

 <?php $i =1; //var_dump($locations); 
    while($i<=count($locations)) {
        //$envoi = "";
        //$envoi = $locations[$i][2]."papa".$locations[$i][3];
        $envoi[0] = $locations[$i][2];
        $envoi[1] = $locations[$i][3];
        //var_dump($envoi);
        //echo $envoi;
        ?>
            <tr><th scope="row"><?php echo $i; ?></th>
            <td><?php echo $locations[$i][0]; ?></td>
            <td><?php echo $locations[$i][1]; ?></td>
            <td><button type="submit" onclick="document.getElementById('var1').value = <?= $envoi[0]?>;document.getElementById('var2').value = <?= $envoi[1]?>" class="btn btn-primary" data-toggle="modal" data-target="#Rendre_Art" class="btn btn-danger btn-sm" href="" style="margin-left: 110%;">Rendre</button></td>
            </tr>
            <?php $i++;
    }
    ?> 
    </tbody>
    </table>
	</div>
<?php
}
?>