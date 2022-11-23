<?php

$data=yaml_parse_file("cours.yaml");
echo '<h1>'.$data['Prenom'].' '.$data['Nom'].'</h1>'
echo
?>