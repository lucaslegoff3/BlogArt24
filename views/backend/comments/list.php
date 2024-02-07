<?php
include '../../../header.php'; // contains the header and call to config.php

//Load all comments
$commentaires = sql_select("COMMENT", "*");

$commentaires = sql_select("comment 
                    INNER JOIN membre ON comment.numMemb = membre.numMemb
                    INNER JOIN article ON comment.numArt = article.numArt", "*");
?>

<!-- Bootstrap default layout to display all comments in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Commentaires</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Date création de commentaire</th>
                        <th>Commentaire</th>
                        <th>Date Modération</th>
                        <th>Attendre si Modérateur est OK</th>
                        <th>Justification modération si ! visible</th>
                        <th>Date supprimé commentaire</th>
                        <th>Supression logique</th>
                        <th>Nom de l'Article</th>
                        <th>Pseudo Membre</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($commentaires as $commentaire) { ?>
                        <tr>
                            <td><?php echo ($commentaire['numCom']); ?></td>
                            <td><?php echo ($commentaire['dtCreaCom']); ?></td>
                            <td><?php echo ($commentaire['libCom']); ?></td>
                            <td><?php echo ($commentaire['dtModCom']); ?></td>
                            <td><?php echo ($commentaire['attModOK']); ?></td>
                            <td><?php echo ($commentaire['notifComKOAff']); ?></td>
                            <td><?php echo ($commentaire['dtDelLogCom']); ?></td>
                            <td><?php echo ($commentaire['delLogiq']); ?></td>
                            <td><?php echo ($commentaire['libTitrArt']); ?></td>
                            <td><?php echo ($commentaire['pseudoMemb']); ?></td>
                            <td>
                                <a href="edit.php?numStat=<?php echo ($statut['numCom']); ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numStat=<?php echo ($statut['numCom']); ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>
</div>

<br>

<?php
include '../../../footer.php'; // contains the footer