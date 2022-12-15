<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo list</title>
    <link style=stylesheet href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="list">
        <h1 class="header">TodoList</h1>
        <form class="item-add" action="index.php" method="post">
            <input type="text" name="tache" placeholder="Tapez la tâche à faire" class="input" autocomplete="off" required>
            <input type="submit" value="Ajouter" class="submit">
        </form>
        <?php
            $_SESSION['taches'][]=$_POST['tache'];
            foreach($_SESSION['taches'] AS $tache){
                echo '<p>'.$tache.'</p>';
            }
        ?>
    </div>
</body>
</html>

<?php