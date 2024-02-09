    <?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numArt = addslashes($_POST['numArt']);

sql_delete('ARTICLE', "numArt = $numArt");

header('Location: ../../views/backend/articles/list.php');
