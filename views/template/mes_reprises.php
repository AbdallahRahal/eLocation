<div class="container" style="max-width: 98%;margin-top: 5%">
<p><h2>Mes Reprises</h2></p>
    <table class="table table-striped table-hover" style="align-center: auto;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Photo</th>
                <th scope="col">Stade</th>
                <th scope="col">Date</th>
                <th scope="col">Prix</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
    while($donneesAffichage = $affichage_reprise->fetch()){
        if($donneesAffichage['Stade'] == "proposition"){
        ?>
            <tr><th scope="row"><?php echo $donneesAffichage['ID']; ?></th>
            <td><?php echo $donneesAffichage['Nom']; ?></td>
            <td><?php echo $donneesAffichage['Description']; ?></td>
            <td><img src="<?=$donneesAffichage['Photo']?>" style="width: 150px;height: 150px;"></td>
            <td><?php echo $donneesAffichage['Stade']; ?></td>
            <td><?php echo $donneesAffichage['Date']; ?></td>
            <th scope="row"><?php echo $donneesAffichage['Prix']; ?></th>
            <td style="text-align: center;"><button onclick="document.getElementById('tonModal').value = <?php echo $donneesAffichage['ID']; ?>" type="submit" data-toggle="modal" data-target="#RepriseModal" class="btn btn-danger btn-sm" href="">Traiter</button></td>
            <td style="text-align: center;"><button onclick="document.getElementById('suppModal').value = <?php echo $donneesAffichage['ID']; ?>" type="submit" data-toggle="modal" data-target="#SuppModal" class="btn btn-danger btn-sm" href="">Supprimer</button></td>
            </tr>
            <?php
        }if($donneesAffichage['Stade'] == "offre"){?>
            <tr><th scope="row"><?php echo $donneesAffichage['ID']; ?></th>
            <td><?php echo $donneesAffichage['Nom']; ?></td>
            <td><?php echo $donneesAffichage['Description']; ?></td>
            <td><img src="<?=$donneesAffichage['Photo']?>" style="width: 150px;height: 150px;"></td>
            <td><?php echo $donneesAffichage['Stade']; ?></td>
            <td><?php echo $donneesAffichage['Date']; ?></td>
            <th scope="row"><?php echo $donneesAffichage['Prix']; ?> €</th>
            <td style="text-align: center;color: green;font-style: italic;">Proposition Envoyée</td>
            <td style="text-align: center;"></td>
            </tr>
    <?php
        }if($donneesAffichage['Stade'] == "valide"){?>
            <tr><th scope="row"><?php echo $donneesAffichage['ID']; ?></th>
            <td><?php echo $donneesAffichage['Nom']; ?></td>
            <td><?php echo $donneesAffichage['Description']; ?></td>
            <td><img src="<?=$donneesAffichage['Photo']?>" style="width: 150px;height: 150px;"></td>
            <td><?php echo $donneesAffichage['Stade']; ?></td>
            <td><?php echo $donneesAffichage['Date']; ?></td>
            <th scope="row"><?php echo $donneesAffichage['Prix']; ?> €</th>
            <td style="text-align: center;color: green;font-style: italic;">Proposition Validée</td>
            <form action="index.php" method="get">
            <input type='hidden' name='page' value='accueil'>
            <input type='hidden' name='rub' value='reprises'>
            <td style="text-align: center;"><button type="submit" name ="ajout_rep" value="true" class="btn btn-danger btn-sm">Ajouter l'article</button></td>
            </form>
            </tr>
<?php
        }
    }
    ?>
        </tbody>
    </table>
</div>