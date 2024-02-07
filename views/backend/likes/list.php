<?php
include '../../../header.php'; // contains the header and call to config.php

//Load all Likes
$Likes = sql_select("likeart 
                    INNER JOIN membre ON likeart.numMemb = membre.numMemb
                    INNER JOIN article ON likeart.numArt = article.numArt", "*");

?>

<!-- Bootstrap default layout to display all Likes in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Likes</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Pseudo de membres</th>
                        <th>Nom des articles</th>
                        <th>a aimé ?</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Likes as $Like) { ?>
                        <tr>
                            <td><?php echo ($Like['pseudoMemb']); ?></td>
                            <td><?php echo ($Like['libTitrArt']); ?></td>
                            <td><?php echo ($Like['likeA']); ?></td>
                            <td>
                                <a href="edit.php?numMemb=<?php echo ($Like['numMemb']); ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numMemb=<?php echo ($Like['numMemb']); ?>" class="btn btn-danger">Delete</a>
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