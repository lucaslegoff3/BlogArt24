<?php
include '../../../header.php';

if(isset($_GET['numThem'])){
    $numThem = $_GET['numThem'];
    $result = sql_select("THEMATIQUE", "libThem", "numThem = $numThem");
    if (!empty($result)) {
        $libThem = $result[0]['libThem'];
    } else {
    }
}
?>

<!-- Bootstrap form to create a new thematique -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modification Thématique</h1>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/thematiques/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="libThem">Nom du thématique</label>
                    <input id="numThem" name="numThem" class="form-control" style="display: none" type="text" value="<?php echo isset($numThem) ? htmlspecialchars($numThem) : ''; ?>" readonly="readonly" />
                    <input id="libThem" name="libThem" class="form-control" type="text" value="<?php echo htmlspecialchars($libThem); ?>" />
                </div>
                <br />
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                </div>
            </form>
        </div>
    </div>
</div>
