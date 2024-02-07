<?php
include '../../../header.php';

if (isset($_GET['numCom'])) {
    $numCom = $_GET['numCom'];
    $commentaire = sql_select("COMMENT", "*", "numCom = $numCom")[0];
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppression de commentaire</h1>
        </div>
        <div class="col-md-12">

            <form action="<?php echo ROOT_URL . '/api/comments/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="numCom">ID du commentaire</label>
                    <input id="numCom" name="numCom" class="form-control" style="display: none" type="text" value="<?php echo ($numCom); ?>" readonly="readonly" />
                    <input id="libCom" name="libCom" class="form-control" type="text" value="<?php echo ($commentaire['libCom']); ?>" readonly="readonly" disabled />
                </div>
                <br />
                <div class="form-group mt-2">
                    <p style="color:red"><i><strong>Attention : </strong>La suppression de ce commentaire sera définitive.</i></p>
                    <button type="submit" class="btn btn-danger">Confirmer la suppression</button>
                </div>
            </form>
        </div>
    </div>
</div>