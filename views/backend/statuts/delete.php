<?php
include '../../../header.php';
$delete = 0;
if (isset($_GET['numStat'])) {
    $numStat = $_GET['numStat'];
    $libStat = sql_select("STATUT", "libStat", "numStat = $numStat")[0]['libStat'];

    $hasMembers = sql_select("MEMBRE", "COUNT(*)", "numStat = $numStat")[0][0];

    if ($hasMembers > 0) {
        $delete = 0;
    } else {
        $delete = 1;
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppression Statut</h1>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/statuts/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libStat">Statut</label>
                    <input id="numStat" name="numStat" class="form-control" style="display: none" type="text" value="<?php echo ($numStat); ?>" readonly="readonly" />
                    <input id="libStat" name="libStat" class="form-control" type="text" value="<?php echo ($libStat); ?>" readonly="readonly" disabled />
                </div>
                <br />
                <div class="form-group mt-2">
                    <?php if ($delete == 0) {
                        echo '<span style="color: red;"><b>Erreur :</b> Impossible de supprimer ce statut car il est associé à des membres.</span><br>'; ?><br>
                        <button type="submit" class="btn btn-danger" disabled>Confirmer delete ?</button>
                    <?php } elseif ($delete == 1) { ?>
                        <button type="submit" class="btn btn-danger">Confirmer delete ?</button>
                    <?php }
                    ?>
                </div>
            </form>
        </div>
    </div>
</div>