<?php
include '../../../header.php';

if (isset($_GET['numLike'])) {
    $numLike = $_GET['numLike'];
    $result = sql_select("LIKEART", "libLike", "numLike = $numLike");
    if (!empty($result)) {
        $libLike = $result[0]['libLike'];
    } else {
    }
}
?>

<!-- Bootstrap form to create a new statut -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modification Like</h1>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/likes/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="libLike">Nom du statut</label>
                    <input id="numLike" name="numLike" class="form-control" style="display: none" type="text" value="<?php echo isset($numLike) ? htmlspecialchars($numLike) : ''; ?>" readonly="readonly" />
                    <input id="libLike" name="libLike" class="form-control" type="text" value="<?php echo htmlspecialchars($libLike); ?>" />
                </div>
                <br />
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                </div>
            </form>
        </div>
    </div>
</div>