<div class="container" style="max-width: 54%;margin-top: 5%">
<p><h2>Mes Points Relais</h2><br>
    <table class="table table-striped table-hover" style="align-center: auto;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Code Postal</th>
                <th scope="col">Ville</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
             
        <tr><th scope="row"></th>
            <td><input required type="text" class="form-control" name="nom"></td>
            <td><input required type="text" class="form-control" name="adresse"></td>
            <td><input required type="text" class="form-control" name="cp"></td>
            <td><input required type="text" class="form-control" name="ville"></td>
            <td></td>
            <td><button type="button" style="margin-left: 15%" class="btn btn-danger btn-sm">Ajouter</button></td>
        </tr>
        <?php
        $i = 1;
        
    while($donneesAffichage = $point_relais->fetch()){
        ?>
            <tr><th scope="row"><?php echo $donneesAffichage['id']; ?></th>
            <td><?php echo $donneesAffichage['nom']; ?></td>
            <td><?php echo $donneesAffichage['adresse']; ?></td>
            <td><?php echo $donneesAffichage['cp']; ?></td>
            <td><?php echo $donneesAffichage['ville']; ?></td>
            <td><button type="button" class="btn btn-danger btn-sm">Modifier</button></td>
            <td><button type="button" style="margin-left: -9%" class="btn btn-danger btn-sm">Supprimer</button></td>
            </tr>
            <?php
    }
    ?>
        </tbody>
    </table>
</div>