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
        <?php
       $nom = 'Martial';
       $prenom = 'Luc';
       $age = 40;
       //transforme une serie de parametre en array
       $tab = compact('nom', 'prenom', 'age');
       print_r($tab);
       //transforme un tableau en texte
       $textab = implode(' &',$tab );
       echo $textab;
       
        ?>
    </body>
</html>
