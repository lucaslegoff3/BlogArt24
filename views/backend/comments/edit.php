<?php
include '../../../header.php';

if (isset($_GET['numCom'])) {
    $numCom = $_GET['numCom'];
    $result = sql_select("COMMENT", "libCom", "numCom = $numCom");
    if (!empty($result)) {
        $libCom = $result[0]['libCom'];
    } else {
    }
}
?>

<!-- Bootstrap form to create a new statut -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modification Commentaire</h1>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/comments/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="libCom">Nom du statut</label>
                    <input id="numCom" name="numCom" class="form-control" style="display: none" type="text" value="<?php echo isset($numCom) ? htmlspecialchars($numCom) : ''; ?>" readonly="readonly" />
                    <input id="libCom" name="libCom" class="form-control" type="text" value="<?php echo htmlspecialchars($libCom); ?>" />
                    <input id="attModOK" name="attModOK" class="form-control" type="text" value="<?php echo htmlspecialchars($commentaire['attModOK']); ?>" />
                </div>
                <br />
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                </div>
            </form>
        </div>
    </div>
</div>