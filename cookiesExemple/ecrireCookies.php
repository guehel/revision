
<!--
page servant a mettre un cookie chez le client.
pour limiter les cookies mettre time + durée
-->

<?php

if (!isset($_COOKIE["utilisateur"])) {
$personne = array('nom' => 'Bouanga',
    'prenom' => 'Guehel',
    'age' => 40
);
//creer un cookie appele utilisateur avec les clefs du tableau.
//faire attention de ne pas mettre de guillemets pour le tableau
 foreach($personne as $cle=>$valeur){
     setcookie("utilisateur[".$cle."]", $valeur, time()+3600);
 }
    ?>

    <!DOCTYPE html>

    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
        </head>
        <body>
            verifier la presence de cookies

        </body>
    </html>

    <?php
} 
else {
    echo 'Nom : '.$_COOKIE["utilisateur"]["nom"] . '<br/>';
    echo 'Prenom : '.$_COOKIE["utilisateur"]["prenom"] . '<br/>';
    echo 'Age : '.$_COOKIE["utilisateur"]["age"] . '<br/>';
}



