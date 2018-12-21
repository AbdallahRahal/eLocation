<div class="container" style="max-width: 98%;margin-top: 5%">
<br><h2>Mes Propositions</h2><br>
    <table class="table table-striped table-hover" style="align-center: auto;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Photo</th>
                <th scope="col">Stade</th>
                <th scope="col">Date</th>
                <th scope="col">Prix (en €)</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
    while($donneesAffichage = $affichage_reprise->fetch()){
        if($donneesAffichage['Stade'] == "proposition"){
        ?>
            <th scope="row"><?=$donneesAffichage['Nom']?></th>
            <td><?=$donneesAffichage['Description']?></td>
            <td><img src="views/img/<?=$donneesAffichage['Photo']?>" style="width: 150px;height: 150px;"></td>
            <td><?=$donneesAffichage['Stade']?></td>
            <td><?=strftime('%d-%m-%Y',strtotime($donneesAffichage['Date']))?></td>
            <td></td>
            <td></td>
            <td style="text-align: center;color: orange;font-style: italic;">Proposition envoyée à un Administrateur</td>
            <td></td>
            </tr>
            <?php
        }if($donneesAffichage['Stade'] == "offre"){?>
            <th scope="row"><?=$donneesAffichage['Nom']?></th>
            <td><?=$donneesAffichage['Description']?></td>
            <td><img src="views/img/<?=$donneesAffichage['Photo']?>" style="width: 150px;height: 150px;"></td>
            <td><?=$donneesAffichage['Stade']?></td>
            <td><?=strftime('%d-%m-%Y',strtotime($donneesAffichage['Date']))?></td>
            <th scope="row"  style="color: green;"><?=$donneesAffichage['Prix']?></th>
            <form action="index.php" method="get">
            <input type='hidden' name='page' value='accueil'>
            <input type='hidden' name='rub' value='proposition'>
            <td style="text-align: center;"><button name = "accepter" value ="<?=$donneesAffichage['ID']?>" type="submit" href="" class="btn btn-danger btn-sm">Accepter</button></td>
            <td style="text-align: center;"><button name = "reprop" value ="<?=$donneesAffichage['ID']?>" type="submit" href="" class="btn btn-danger btn-sm">Refaire une offre</td>
            <td style="text-align: center;"><button name = "refuser" value ="<?=$donneesAffichage['ID']?>" type="submit" href="" class="btn btn-danger btn-sm">Refuser</button></td>
            </form>
            </tr>
            <?php
        }if($donneesAffichage['Stade'] == "valide"){?>
            <th scope="row"><?=$donneesAffichage['Nom']?></th>
            <td><?=$donneesAffichage['Description']?></td>
            <td><img src="views/img/<?=$donneesAffichage['Photo']?>" style="width: 150px;height: 150px;"></td>
            <td><?=$donneesAffichage['Stade']?></td>
            <td><?=strftime('%d-%m-%Y',strtotime($donneesAffichage['Date']))?></td>
            <th scope="row"><?=$donneesAffichage['Prix']?></th>
            <td></td>
            <td style="text-align: center;color: green;font-style: italic;width: 20%;">Votre article a été acheté, il sera bientôt disponible à la location</td>
            <td></td>
            </tr>
    <?php
        }
    }
    ?>
        </tbody>
    </table>
</div>