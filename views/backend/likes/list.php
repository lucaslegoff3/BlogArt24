<?php
include '../../../header.php'; // contains the header and call to config.php

//Load all Membuts
$Likes = sql_select("LIKEART", "*");
?>

<!-- Bootstrap default layout to display all Members in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Likes</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Numéro des membres</th>
                        <th>Numéro des articles</th>
                        <th>Like A</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($Likes as $Like){ ?>
                        <tr>
                            <td><?php echo($Like['numMemb']); ?></td>
                            <td><?php echo($Like['numArt']); ?></td>
                            <td><?php echo($Like['likeA']); ?></td>
                            <td>
                                <a href="edit.php?numMemb=<?php echo($Like['numMemb']); ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numMemb=<?php echo($Like['numMemb']); ?>" class="btn btn-danger">Delete</a>
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