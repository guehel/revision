<?php

/*
 * classe php pour reviser le cours sur les objets
 * autteur: Guehel Bouanga
 * date: 2014/08/04
 */

class Personne{
    var $age; var $nom;
    public function afficherAge(){
        $dateDuJour = date("Y");
        echo ($dateDuJour-$this->age);
    }
}

$personne = new Personne();
$personne->age = 1974;
$personne->afficherAge();