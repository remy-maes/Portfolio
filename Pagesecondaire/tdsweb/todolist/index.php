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
        <ul>
            <li>
                <span class="item">Pick up Shopping</span>
                <a href="#" class="done-button">Mark as Done</a>
            </li>
            <li>
                <span class"item done">Learn php</span>
            </li>
        </ul>
        <form class="item-add" action="add.php" method="post">
            <input type="text" name="name" placeholder="type a new item here." class="input" autocomplete="off" required>
            <input type="submit" value="add" class="submit">
        </form>
    </div>
</body>
</html>