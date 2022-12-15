<?php

function menu() {
    echo '<ul id="depliant">';
    
    $menu=yaml_parse_file("stockage/menu.yaml");
    foreach($menu AS $fichier=>$nom){
        echo '<li><a href="Pagesecondaire/'.$fichier.'.php">'.$nom.'</a></li>';
    }
    echo '<li><a href="Pagesecondaire/tdsweb/TDS_WEB.html">TDS WEB</a></li>';       
    echo '<a href="https://www.linkedin.com/in/r%C3%A9my-ma%C3%ABs-bb284624b/" target="_blank">';
    echo '<img class="linkedin" src="image/logolink.png">';
    echo '</a>';
    echo '<a href="https://github.com/remy-maes" target="_blank">';
    echo '<img class="git" src="image/logogit.png">';
    echo '</a>';
    echo '<a href="https://drive.google.com/file/d/1LU-68_mksvD9NqJ0k2BtkcaX3wLFLfHr/view?usp=share_link" target="_blank">';
    echo '<img id="cv" src="image/cv.png">';
    echo '</a>';
    echo '</ul>';
}

function accueil(){
    $accueil=yaml_parse_file("stockage/accueil.yaml");
    echo '<h1 id="gtitre">'.$accueil['prenom'].' '.$accueil['nom'].'</h1>';
    echo '<p id="phraseaccroche">'.$accueil['accroche'].'</p>';
    echo '<img id="photoperso" src="../image/'.$accueil['image'].'">';
}

function competence(){
    $competences=yaml_parse_file("stockage/competence.yaml");

    echo '<h2 class="ctitre">'.$competences['titre'].'</h2>';
    foreach($competences['corps'] AS $domaine=>$tab){
        echo '<h3>'.$domaine.'</h3>';
        foreach($tab AS $nom=>$niveau){
            echo '<p class="nom_skill">'.$nom.'</p>';
            echo '<div class="container">';
            echo '<div class="skill" style="width:'.$niveau.'%;">'.$niveau.'%</div>';
            echo '</div>';
        }
    }
}

function formations(){
    $formations=yaml_parse_file("stockage/formations.yaml");
    echo ' <h2 class="ctitre">'.$formations['titre'].'</h2>';
    foreach($formations['formation'] AS $tab){
    echo '<p class="formation">'.$tab['nom'].'<a class="spe"> '.$tab['filiere'].'</a> Option <a id="op">'.$tab['option'].'</a> au seins de létablissement '.$tab['lieu'].' ('.$tab['status'].')</p>';
    }
}

function moi(){
    $moi=yaml_parse_file("stockage/moi.yaml");
    echo '<h2 class="ctitre">'.$moi['titre'].'</h2>';
    echo '<p id="presentation">'.$moi['description'].'</a>';
}

function contact(){
    echo '<h1>Me contacter</h1>';
    echo '<form name="mon-formulaire1" action="page-envoi.html" method="get">';
    echo'<p>';
    echo   '<input type="radio" name="civi" value="Mme" /> Madame';
    echo  ' <input type="radio" name="civi" value="Mlle" /> Mademoiselle';
    echo  ' <input type="radio" name="civi" value="Mr" /> Monsieur';
    echo'</p>';
    echo'<p>';
    echo   'Votre prénom :<br />';
    echo   '<input type="text" name="prenom" value="" />';
    echo'</p>';
    echo'<p>';
    echo   'Votre nom :<br />';
    echo  ' <input type="text" name="nom" value="" />';
    echo'</p>';
    echo'<p>';
    echo   'Votre mot de passe :<br />';
    echo  ' <input type="password" name="passe" value="" />';
    echo'</p>';
    echo'<p>';
    echo   'Vous êtes<br />';
    echo   '<select name="profil">';
    echo      '<option value="parti">Un particulier</option>';
    echo     ' <option value="profe" selected="selected">Un professionnel</option>';
    echo      '<option value="insti">Un institutionnel</option>';
    echo   '</select>';
    echo'</p>';
    echo'<p>';
    echo   'Quel type de prestation recherchez vous ?<br />';
    echo   '<input type="checkbox" name="interet" value="loc" /> Location de mobilier';
    echo   '<input type="checkbox" name="interet" value="achat" /> Achat de mobilier';
    echo'</p>';
    echo'<p>';
    echo  ' Votre message :<br />';
    echo  ' <textarea name="le-message" rows="6" cols="40">Vous pouvez saisir ici un message.</textarea>';
    echo'</p>';
    echo'<p>';
    echo  ' <input type="submit" value="Envoyer" />';
    echo   '<input type="reset" value="Annuler" />';
    echo'</p>';
    echo '</form>';
}

function xp(){
    
}
?>