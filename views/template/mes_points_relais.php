<div class="container" style="max-width: 35%;margin-top: 5%">
<p><h2>Mes Points Relais</h2><p>
    <form action="" method="POST">
        Nom : <input required type="text" class="form-control" name="nom">
        Adresse : <input required type="text" class="form-control" name="adresse">
        Code Postal : <input required type="text" class="form-control" name="cp">
        Ville : <input required type="text" class="form-control" name="ville">
        <button type="submit" name="ajouter" value="true" class="btn btn-primary">Ajouter</button>
    </form>
    <table class="table table-striped table-hover" style="align-center: auto;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
    while($donneesAffichage = $mes_categories->fetch()){
        ?>
            <tr><th scope="row"><?php echo $donneesAffichage['ID']; ?></th>
            <td><?php echo $donneesAffichage['Nom']; ?></td>
            <td>
                <form action="" method="POST">
                    <button type="button" class="btn btn-danger btn-sm" style="margin-left: 110%;">Modifier</button>
                </form>
            </td>
            <td>
                <form action="" method="POST">
                    <button type="button" class="btn btn-danger btn-sm" style="margin-left: 50%;">Supprimer</button>
                </form>
            </td>
            </tr>
            <?php
    }
    ?>
        </tbody>
    </table>
</div>