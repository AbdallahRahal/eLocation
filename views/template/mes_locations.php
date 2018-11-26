<div class="container" style="max-width: 98%;margin-top: 5%">
<p><h2>Mes Locations</h2></p>
    <table class="table table-striped table-hover" style="align-center: auto;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prix</th>
                <th scope="col">Description</th>
                <th scope="col">Photo</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
        <?php
    while($donneesAffichage = $affichage_location->fetch()){
        ?>
            <tr><td><?php echo $donneesAffichage['Nom']; ?></td>
            <td><?php echo $donneesAffichage['Prix']; ?></td>
            <td><?php echo $donneesAffichage['Description']; ?></td>
            <td><img src="views/template/vbtwin1.jpg" style="width: 150px;height: 150px;"></td>
            <td><?php echo $donneesAffichage['Date']; ?></td>
            </tr>
            <?php
    }
    ?>
        </tbody>
    </table>
</div>