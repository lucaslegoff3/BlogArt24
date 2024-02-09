<?php
include '../../../header.php'; // contains the header and call to config.php

//Load all articles
$articles = sql_select("ARTICLE", "*");
$articles = sql_select("article INNER JOIN thematique ON article.numThem = thematique.numThem", "*");
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
                        <th>Date création des articles</th>
                        <th>Date mise à jour des articles</th>
                        <th>Titre des articles</th>
                        <th>Chapô des articles</th>
                        <th>Accroche des articles</th>
                        <th>Paragraphe 1 des articles</th>
                        <th>Sous titre 1 des articles</th>
                        <th>Paragraphe 2 des articles</th>
                        <th>Sous titre 2 des articles</th>
                        <th>Paragraphe 3 des articles</th>
                        <th>Conclusion des articles</th>
                        <th>URL Photo des articles</th>
                        <th>Thématique</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($articles as $article) { ?>
                        <tr>
                            <td><?php echo ($article['numArt']); ?></td>
                            <td><?php echo ($article['dtCreaArt']); ?></td>
                            <td><?php echo ($article['dtMajArt']); ?></td>
                            <td><?php echo ($article['libTitrArt']); ?></td>
                            <td><?php echo ($article['libChapoArt']); ?></td>
                            <td><?php echo ($article['libAccrochArt']); ?></td>
                            <td><?php echo ($article['parag1Art']); ?></td>
                            <td><?php echo ($article['libSsTitr1Art']); ?></td>
                            <td><?php echo ($article['parag2Art']); ?></td>
                            <td><?php echo ($article['libSsTitr2Art']); ?></td>
                            <td><?php echo ($article['parag3Art']); ?></td>
                            <td><?php echo ($article['libConclArt']); ?></td>
                            <td><img src="<?php echo ROOT_URL . '/src/uploads/' . str_replace('.jpg', '.png', $article['urlPhotArt'])?>" alt="Description de l'image" style="max-width: 600px; height: auto;"></td>
                            <td><?php echo ($article['libThem']); ?></td>
                            <td>
                                <a href="edit.php?numArt=<?php echo ($article['numArt']); ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numArt=<?php echo ($article['numArt']); ?>" class="btn btn-danger">Delete</a>
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
