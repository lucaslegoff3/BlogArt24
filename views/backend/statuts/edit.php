<?php
include '../../../header.php';

if(isset($_GET['numStat'])){
    $numStat = $_GET['numStat'];
    $result = sql_select("STATUT", "libStat", "numStat = $numStat");
    if (!empty($result)) {
        $libStat = $result[0]['libStat'];
    } else {
    }
}
?>

<!-- Bootstrap form to create a new statut -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modification Statut</h1>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/statuts/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="libStat">Nom du statut</label>
                    <input id="numStat" name="numStat" class="form-control" style="display: none" type="text" value="<?php echo isset($numStat) ? htmlspecialchars($numStat) : ''; ?>" readonly="readonly" />
                    <input id="libStat" name="libStat" class="form-control" type="text" value="<?php echo htmlspecialchars($libStat); ?>" />
                </div>
                <br>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                </div>
            </form>
        </div>
    </div>
</div>
