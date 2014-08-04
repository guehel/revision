<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method='GET' action ='Trigonometrie.php' >
           hauteur <input type = 'text' name ='hauteur'/>
           largeur <input type = 'text' name ='largeur'/>
            <input type = 'submit'  value='envoyer'/>
        </form>
        <p>
        <?= $rectangle==null?'':$rectangle->getHauteur(); ?>&nbsp;
        <?= $rectangle==null?'':$rectangle->getLargeur(); ?>
        </p>
        
        <?= $rectangle==null?'les valeurs saisies ne sont pas correcte'
        :"l'hypothenuse de votre rectange est ".$hypothenuse
        ?>
    </body>
</html>
