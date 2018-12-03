<div class="container" style="max-width: 35%;margin-top: 5%">
<p><h2>Mes Catégories</h2></p>
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
            <td><button type="button" class="btn btn-danger btn-sm" style="margin-left: 110%;">Modifier</button></td>
            <td><button type="button" class="btn btn-danger btn-sm" style="margin-left: 50%;">Supprimer</button></td>
            </tr>
            <?php
    }
    ?>
        </tbody>
    </table>
</div>