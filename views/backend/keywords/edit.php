<?php
include '../../../header.php';

if (isset($_GET['numMotCle'])) {
    $numMotCle = $_GET['numMotCle'];
    $result = sql_select("MOTCLE", "libMotCle", "numMotCle = $numMotCle");
    if (!empty($result)) {
        $libMotCle = $result[0]['libMotCle'];
    } else {
    }
}
?>

<!-- Bootstrap form to create a new statut -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modification Mot-Clé</h1>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/keywords/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="libMotCle">Nom du statut</label>
                    <input id="numMotCle" name="numMotCle" class="form-control" style="display: none" type="text" value="<?php echo isset($numMotCle) ? htmlspecialchars($numMotCle) : ''; ?>" readonly="readonly" />
                    <input id="libMotCle" name="libMotCle" class="form-control" type="text" value="<?php echo htmlspecialchars($libMotCle); ?>" />
                </div>
                <br />
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                </div>
            </form>
        </div>
    </div>
</div>