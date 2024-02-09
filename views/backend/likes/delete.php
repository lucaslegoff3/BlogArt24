<?php
include '../../../header.php';

if (isset($_GET['numLike'])) {
    $numLike = $_GET['numLike'];
    $libLike = sql_select("LIKEART", "libLike", "numLike = $numLike")[0]['libLike'];
}
?>

<!-- Bootstrap form to create a new statut -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppression Like</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/likes/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libLike">Mot Clé</label>
                    <input id="numLike" name="numLike" class="form-control" style="display: none" type="text" value="<?php echo ($numLike); ?>" readonly="readonly" />
                    <input id="libLike" name="libLike" class="form-control" type="text" value="<?php echo ($libLike); ?>" readonly="readonly" disabled />
                </div>
                <br />
                <div class="form-group mt-2">
                    <p style=color:red><i><strong>Attention : </strong>L'existence de Mots clés associés à un ou plusieurs articles rendra la suppression impossible.</i></p>
                    <button type="submit" class="btn btn-danger">Confirmer delete ?</button>
                </div>
            </form>
        </div>
    </div>
</div>