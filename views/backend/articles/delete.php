<?php
include '../../../header.php';

if (isset($_GET['numArt'])) {
    $numArt = $_GET['numArt'];
    $articles = sql_select("ARTICLE", "*", "numArt = $numArt")[0];
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppression de l'article</h1>
        </div>
        <div class="col-md-12">

            <form action="<?php echo ROOT_URL . '/api/articles/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="numCom">ID de l'article</label>
                    <input id="numCom" name="numCom" class="form-control" style="display: none" type="text" value="<?php echo ($numArt); ?>" readonly="readonly" />
                    <label for="dtCreaArt">Date création de l'articles</label>
                    <input id="dtCreaArt" name="dtCreaArt" class="form-control" type="text" value="<?php echo ($articles['dtCreaArt']); ?>" readonly="readonly" />
                    <label for="dtMajArt">Date mise à jour de l'articles</label>
                    <input id="dtMajArt" name="dtMajArt" class="form-control" type="text" value="<?php echo ($articles['dtMajArt']); ?>" readonly="readonly" />
                    <label for="libTitrArt">Titre de l'articles</label>
                    <input id="libTitrArt" name="libTitrArt" class="form-control" type="text" value="<?php echo ($articles['libTitrArt']); ?>" readonly="readonly" />
                    <label for="libChapoArt">Chapo de l'articles</label>
                    <input id="libChapoArt" name="libChapoArt" class="form-control" type="text" value="<?php echo ($articles['libChapoArt']); ?>" readonly="readonly" />
                    <label for="libArrochArt">Arroche de l'articles</label>
                    <input id="libAccrochArt" name="libAccrochArt" class="form-control" type="text" value="<?php echo ($articles['libAccrochArt']); ?>" readonly="readonly" />
                    <label for="parag1Art">Paragraphe 1 de l'articles</label>
                    <input id="parag1Art" name="parag1Art" class="form-control" type="text" value="<?php echo ($articles['parag1Art']); ?>" readonly="readonly" />
                    <label for="libSsTitr1Art">Sous titre 1 de l'articles</label>
                    <input id="libSsTitr1Art" name="libSsTitr1Art" class="form-control" type="text" value="<?php echo ($articles['libSsTitr1Art']); ?>" readonly="readonly" />
                    <label for="parag2Art">Paragraphe 2 de l'articles</label>
                    <input id="parag2Art" name="parag2Art" class="form-control" type="text" value="<?php echo ($articles['parag2Art']); ?>" readonly="readonly" />
                    <label for="libSsTitr2Art">Sous titre 2 de l'articles</label>
                    <input id="libSsTitr2Art" name="libSsTitr2Art" class="form-control" type="text" value="<?php echo ($articles['libSsTitr2Art']); ?>" readonly="readonly" />
                    <label for="parag3Art">Paragraphe 3 de l'articles</label>
                    <input id="parag3Art" name="parag3Art" class="form-control" type="text" value="<?php echo ($articles['parag3Art']); ?>" readonly="readonly" />
                    <label for="libConclArt">Conclusion de l'articles</label>
                    <input id="libConclArt" name="libConclArt" class="form-control" type="text" value="<?php echo ($articles['libConclArt']); ?>" readonly="readonly" />
                    <label for="urlPhotArt">URL Photo de l'articles</label>
                    <input id="urlPhotArt" name="urlPhotArt" class="form-control" type="text" value="../../../src/uploads/<?php echo str_replace("jpg", "png", $articles['urlPhotArt']); ?>" readonly="readonly" />
                    <label for="libThem">Thématique</label>
                    <input id="libThem" name="libThem" class="form-control" type="text" value="<?php echo ($articles['libThem']); ?>" readonly="readonly" />
                </div>
                <br />
                <div class="form-group mt-2">
                    <p style="color:red"><i><strong>Attention : </strong>La suppression de cet article sera définitive.</i></p>
                    <button type="submit" class="btn btn-danger">Confirmer la suppression</button>
                </div>
            </form>
        </div>
    </div>
</div>