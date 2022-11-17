<form method="get" action="variable.php">
    <input type="text" name="msg">
    <input type="color" name="color">
    <input type="color" name="bgcolor">
    <input type="number" value="1" max="6" min="1" name="nb">
    <button type="submit">Valider</button>
</form>

<?php
$message=$_GET['msg']??"Bonjour!";
$max=$_GET['nb']??5;
$color=$_GET['color']??'black';
$bgcolor=$_GET['bgcolor']??'white';

foreach (range(start:1, max$max) as $i){
echo "<h$i style='color: $color;background-color: $bgcolor'>"
$message</h$i>;
}
