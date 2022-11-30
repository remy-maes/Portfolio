<?php

function menu() {
    echo '<ul id="depliant">';
    
    $menu=yaml_parse_file("stockage/menu.yaml");
    foreach($menu AS $fichier=>$nom){
        echo '<li><a href="Pagesecondaire/'.$fichier.'.php">'.$nom.'</a></li>';
    }       
    echo '<a href="https://www.linkedin.com/in/r%C3%A9my-ma%C3%ABs-bb284624b/" target="_blank">';
    echo '<img class="linkedin" src="image/logolink.png">';
    echo '</a>';
    echo '<a href="https://github.com/remy-maes" target="_blank">';
    echo '<img class="git" src="image/logogit.png">';
    echo '</a>';
    echo '</ul>';
}

function accueil(){
    $accueil=yaml_parse_file("stockage/accueil.yaml");
    echo '<h1 id="gtitre">'.$accueil['prenom'].' '.$accueil['nom'].'</h1>';
    echo '<p id="phraseaccroche">'.$accueil['accroche'].'</p>';
    echo '<img id="photoperso" src="../image/'.$accueil['image'].'">';
}

?>