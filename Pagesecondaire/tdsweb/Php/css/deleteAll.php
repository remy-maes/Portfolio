<?php
if (!isset($_SESSION)) {
session_start();
}
$list = $_SESSION['todolist'] ?? [];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <h1>Todolist </h1>
    <a href="addElement.php" class="btn btn-dark">Ajouter un élément</a>
    <a href="deleteAll.php" class="btn btn-danger">Supprimer tout</a>

    <ul class="list-group">
    <?php
    foreach($list as $index=> $elm){
        echo "<li class='list-group-item'>$elm <a href='deleteElement.php?num=$index'>x</li>";
    }
    echo $truc;
    ?>
    </ul>
</body>
</html>