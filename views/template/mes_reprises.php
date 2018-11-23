<div class="container" style="max-width: 98%;margin-top: 5%">
<p><h2>Mes Reprises</h2></p>
    <table class="table table-striped table-hover" style="align-center: auto;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prix</th>
                <th scope="col">Description</th>
                <th scope="col">Photo</th>
                <th scope="col">Stade</th>
                <th scope="col">Date</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
    while($donneesAffichage = $affichage_reprise->fetch()){
        ?>
            <tr><th scope="row"><?php echo $donneesAffichage['ID']; ?></th>
            <td><?php echo $donneesAffichage['Nom']; ?></td>
            <td><?php echo $donneesAffichage['Prix']; ?></td>
            <td><?php echo $donneesAffichage['Description']; ?></td>
            <td><img src="views/template/vbtwin1.jpg" style="width: 150px;height: 150px;"></td>
            <td><?php echo $donneesAffichage['Stade']; ?></td>
            <td><?php echo $donneesAffichage['Date']; ?></td>
            <td><button type="button" class="btn btn-danger btn-sm">Traiter</button></td>
            <td><button type="button" class="btn btn-danger btn-sm">Modifier</button></td>
            <td><button type="button" class="btn btn-danger btn-sm">Supprimer</button></td>
            </tr>
            <?php
    }
    ?>
        </tbody>
    </table>
</div>