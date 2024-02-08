<?php
include '../../../header.php';

if (isset($_GET['idCommentaire'])) {
    $idCommentaire = $_GET['idCommentaire'];

    $result = sql_select("COMMENTAIRE", "numMemb, numArt, libCom", "idCommentaire = $idCommentaire");
    if (!empty($result)) {
        $numMemb = $result[0]['numMemb'];
        $numArt = $result[0]['numArt'];
        $libCom = $result[0]['libCom'];
    } else {
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modification d'un commentaire</h1>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/comments/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="numMemb">ID du membre</label>
                    <input id="numMemb" name="numMemb" class="form-control" type="text" value="<?php echo isset($numMemb) ? htmlspecialchars($numMemb) : ''; ?>" readonly="readonly" />
                </div>
                <div class="form-group">
                    <label for="numArt">ID de l'article</label>
                    <input id="numArt" name="numArt" class="form-control" type="text" value="<?php echo isset($numArt) ? htmlspecialchars($numArt) : ''; ?>" readonly="readonly" />
                </div>
                <div class="form-group">
                    <label for="libCom">Commentaire</label>
                    <textarea id="libCom" name="libCom" class="form-control"><?php echo isset($libCom) ? htmlspecialchars($libCom) : ''; ?></textarea>
                </div>
                <input type="hidden" name="idCommentaire" value="<?php echo isset($idCommentaire) ? htmlspecialchars($idCommentaire) : ''; ?>" />
                <br />
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include '../../../footer.php';
?>
