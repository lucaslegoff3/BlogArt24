<?php
include '../../../footer.php';
include '../../../header.php';

$statuts = sql_select("STATUT", "*");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numStat = $_POST['numStat'];
    $libStat = $_POST['libStat'];

    $pdo = new PDO('mysql:host=localhost;dbname=blogart24', 'root', 'root');

    $updateQuery = "UPDATE statut SET libStat = :libStat WHERE numStat = :numStat";
    $updateStmt = $pdo->prepare($updateQuery);
    $updateStmt->bindParam(':numStat', $numStat);
    $updateStmt->bindParam(':libStat', $libStat);
    $updateStmt->execute();
    header("Location: edit.php");
    exit();
}

?>
<html>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Statuts</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom des statuts</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($statuts as $statut) { ?>
                        <tr>
                            <form method="POST" action="edit.php">
                                <td><?php echo ($statut['numStat']); ?></td>
                                <td>

                                    <input type="hidden" name="numStat" value="<?php echo ($statut['numStat']); ?>">
                                    <input type="text" name="libStat" value="<?php echo ($statut['libStat']); ?>">
                                </td>
                                <td>
                                    <button type="submit" name="save" class="btn btn-primary">Save</button>

                                    <a href="delete.php?numStat=<?php echo ($statut['numStat']); ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </form>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>
</div>