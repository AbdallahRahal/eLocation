<div class="container" style="max-width: 35%;margin-top: 5%">
<p><h2>Mes Catégories</h2><p><p>
    <form action="" method="POST">
        Nom : <input required type="text" class="form-control" name="nom"><p>
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
        $i = 1;
    while($i<= count($mes_categories)){
        ?>
            <tr><th scope="row"><?php echo $i; ?></th>
            <td><?php echo $mes_categories[$i]; ?></td>
            <td><button type="button" class="btn btn-danger btn-sm" style="margin-left: 110%;">Modifier</button></td>
            <td><button type="button" class="btn btn-danger btn-sm" style="margin-left: 50%;">Supprimer</button></td>
            </tr>
            <?php
            $i++;
    }
    ?>
        </tbody>
    </table>
</div>