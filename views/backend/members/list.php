<?php
include '../../../header.php'; // contains the header and call to config.php

//Load all Membuts
$Members = sql_select("membre INNER JOIN statut ON membre.numStat = statut.numStat", "*");
?>

<!-- Bootstrap default layout to display all Members in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Membres</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom des membres</th>
                        <th>Prénom des membres</th>
                        <th>Pseudo des membres</th>
                        <th>Mot de passe des membres</th>
                        <th>e-Mail des membres</th>
                        <th>Date création des membres</th>
                        <th>Date mise à jour des membres</th>
                        <th>Accordé des membres</th>
                        <th>Numéro status des membres</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($Members as $Member){ ?>
                        <tr>
                            <td><?php echo($Member['numMemb']); ?></td>
                            <td><?php echo($Member['prenomMemb']); ?></td>
                            <td><?php echo($Member['nomMemb']); ?></td>
                            <td><?php echo($Member['pseudoMemb']); ?></td>
                            <td><?php echo($Member['passMemb']); ?></td>
                            <td><?php echo($Member['eMailMemb']); ?></td>
                            <td><?php echo($Member['dtCreaMemb']); ?></td>
                            <td><?php echo($Member['dtMajMemb']); ?></td>
                            <td><?php echo($Member['accordMemb']); ?></td>
                            <td><?php echo($Member['libStat']); ?></td>
                            <td>
                                <a href="edit.php?numMemb=<?php echo($Member['numMemb']); ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numMemb=<?php echo($Member['numMemb']); ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>
</div>
<?php
include '../../../footer.php'; // contains the footer