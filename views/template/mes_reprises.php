<div class="container" style="max-width: 98%;margin-top: 5%">
  <br><h2>Mes Reprises</h2><br>
    <table class="table table-striped table-hover" style="align-center: auto;">
        <thead class="thead-dark">
            <tr>
               
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Nom</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Description</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Photo</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Stade</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Date</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;">Prix (en €)</th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;"></th>
                <th scope="col" style="background-color: #99b3ff !important;border-color: #99b3ff !important;"></th>
            </tr>
        </thead>
        <tbody>
        <?php
        while($donneesAffichage = $affichage_reprise->fetch()){
        if($donneesAffichage['Stade'] == "proposition"){
        ?>
            <tr>
            <td><?=$donneesAffichage['Nom']?></td>
            <td><?=$donneesAffichage['Description']?></td>
            <td><img src="views/img/<?=$donneesAffichage['Photo']?>" style="width: 150px;height: 150px;"></td>
            <td><?=$donneesAffichage['Stade']?></td>
            <td><?=strftime('%d-%m-%Y',strtotime($donneesAffichage['Date']))?></td>
            <th scope="row" style="color: red;"><?=$donneesAffichage['Prix']?></th>
            <td style="text-align: center;"><button onclick="document.getElementById('tonModal').value = <?=$donneesAffichage['ID']?>;document.getElementById('prix').value = <?php if(!empty($donneesAffichage['Prix']) ){echo $donneesAffichage['Prix'];}else{echo 0;}?>;document.getElementById('prix').min = <?php if(!empty($donneesAffichage['Prix']) ){echo $donneesAffichage['Prix'];}else{echo 0;}?>" type="submit" data-toggle="modal" data-target="#RepriseModal" class="btn btn-warning btn-sm" href="">Traiter</button></td>
            <td style="text-align: center;"><button onclick="document.getElementById('suppModal').value = <?=$donneesAffichage['ID']?>" type="submit" data-toggle="modal" data-target="#SuppModal" class="btn btn-warning btn-sm" href="">Supprimer</button></td>
            </tr>
            <?php
        }if($donneesAffichage['Stade'] == "offre"){?>
            <tr>
            <td><?=$donneesAffichage['Nom']?></td>
            <td><?=$donneesAffichage['Description']?></td>
            <td><img src="views/img/<?=$donneesAffichage['Photo']?>" style="width: 150px;height: 150px;"></td>
            <td><?=$donneesAffichage['Stade']?></td>
            <td><?=strftime('%d-%m-%Y',strtotime($donneesAffichage['Date']))?></td>
            <th scope="row"><?=$donneesAffichage['Prix']?></th>
            <td style="text-align: center;color: orange;font-style: italic;">Envoyée</td>
            <td style="text-align: center;"></td>
            </tr>
    <?php
        }if($donneesAffichage['Stade'] == "valide"){?>
            <tr>
            <td><?=$donneesAffichage['Nom']?></td>
            <td><?=$donneesAffichage['Description']?></td>
            <td><img src="views/img/<?=$donneesAffichage['Photo']?>" style="width: 150px;height: 150px;"></td>
            <td><?=$donneesAffichage['Stade']?></td>
            <td><?=strftime('%d-%m-%Y',strtotime($donneesAffichage['Date']))?></td>
            <th scope="row"><?=$donneesAffichage['Prix']?></th>
            <td style="text-align: center;color: green;font-style: italic;">Validée</td>
            <form action="index.php" method="get">
            <input type='hidden' name='page' value='accueil'>
            <input type='hidden' name='rub' value='reprises'>
            <td style="text-align: center;"><button type="submit" name ="ajout_rep" value="<?=$donneesAffichage['ID']?>" class="btn btn-warning btn-sm">Ajouter l'article</button></td>
            </form>
            </tr>
<?php
        }
    }
    ?>
        </tbody>
    </table>
</div>