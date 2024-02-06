<?php
include '../../../header.php'; // contains the header and call to config.php

//Load all articles
$articles = sql_select("ARTICLE", "*");
?>

<!-- Bootstrap default layout to display all articles in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Articles</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Date création des Articles</th>
                        <th>Date mise à jour des Articles</th>
                        <th>Titre des Articles</th>
                        <th>Chapo des Articles</th>
                        <th>Accroche des Articles</th>
                        <th>Paragraphe 1 des Articles</th>
                        <th>Sous titre 1 des Articles</th>
                        <th>Paragraphe 2 des Articles</th>
                        <th>Sous titre 2 des Articles</th>
                        <th>Paragraphe 3 des Articles</th>
                        <th>Conclusion des Articles</th>
                        <th>URL Photo des Articles</th>
                        <th>Numéro Thématique</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($articles as $article){ ?>
                        <tr>
                            <td><?php echo($article['numArt']); ?></td>
                            <td><?php echo($article['dtCreaArt']); ?></td>
                            <td><?php echo($article['dtMajArt']); ?></td>
                            <td><?php echo($article['libTitrArt']); ?></td>
                            <td><?php echo($article['libChapoArt']); ?></td>
                            <td><?php echo($article['libAccrochArt']); ?></td>
                            <td><?php echo($article['parag1Art']); ?></td>
                            <td><?php echo($article['libSsTitr1Art']); ?></td>
                            <td><?php echo($article['parag2Art']); ?></td>
                            <td><?php echo($article['libSsTitr2Art']); ?></td>
                            <td><?php echo($article['parag3Art']); ?></td>
                            <td><?php echo($article['libConclArt']); ?></td>
                            <td><?php echo($article['urlPhotArt']); ?></td>
                            <td><?php echo($article['numThem']); ?></td>
                            <td>
                                <a href="edit.php?numStat=<?php echo($statut['numStat']); ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numStat=<?php echo($statut['numStat']); ?>" class="btn btn-danger">Delete</a>
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