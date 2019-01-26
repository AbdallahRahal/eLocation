<div class="container" style="max-width: 98%;margin-top: 5%">
  <br><h2>Mes Locations</h2><br>
    <table class="table table-striped table-hover" style="align-center: auto;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prix</th>
                <th scope="col">Description</th>
                <th scope="col">Photo</th>
                <th scope="col">Date de location</th>
                <th scope="col">Date butoire</th>
            </tr>
        </thead>
        <tbody>
        <?php
    while($donneesAffichage = $affichage_location->fetch()){
        ?>
            <tr><td><?=$donneesAffichage['Nom']?></td>
            <td><?=$donneesAffichage['Prix']?></td>
            <td><?=$donneesAffichage['Description']?></td>
            <td><img src="views/img/<?=$donneesAffichage['Photo']?>" style="width: 150px;height: 150px;"></td>
            <td><?=strftime('%d-%m-%Y',strtotime($donneesAffichage['Date_de_location']))?></td>
            <td><?=strftime('%d-%m-%Y',strtotime($donneesAffichage['Date_butoire']))?></td>
            </tr>
            <?php
    }
    ?>
        </tbody>
    </table>
</div>