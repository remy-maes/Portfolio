<?php

session_start['user_id']=2;

$db=new PDO('mysql:dbname=todo;host=localhost', 'root', 'root')

if (!isset($_SESSION['user'])){
    die("Vous n'est pas connecter");
}