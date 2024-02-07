<?php
include '../../../header.php'; // contains the header and call to config.php

//Load all keyswords
$keyswords = sql_select("MOTCLE", "*");
?>

<!-- Bootstrap default layout to display all keywords in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Mots-Clés</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom des Mots Clés</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($keyswords as $keyword){ ?>
                        <tr>
                            <td><?php echo($keyword['numMotCle']); ?></td>
                            <td><?php echo($keyword['libMotCle']); ?></td>
                            <td>
                                <a href="edit.php?numMotCle=<?php echo($keyword['numMotCle']); ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numMotCle=<?php echo($keyword['numMotCle']); ?>" class="btn btn-danger">Delete</a>
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