<?php
if(empty($_POST)){
    <input type="text" name="elm" placehorder="Element à ajouter">
    </form>
    <?php
} else {
    session_start();
    $list = $_SESSION['todolist'] ??[];
    $list[] = $_POST['elm'];
    $_SESSION['todolist'] = $list;
}
include 'index.php';