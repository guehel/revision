<?php

/*
 * classe php pour serialiser un objet php 
 * autteur: Guehel Bouanga
 * date: 2014/08/04
 */

class Rectangle{
    private $hauteur;
    private $largeur;
    
    public function __construct($h, $l) {
        $this->hauteur = $h ;
        $this->largeur = $l;
    }
    public function hypothenus(){
        //hypo = racine carre(h*h+l*l)
      
        $hypothenus = sqrt( pow($this->hauteur, 2 ) + pow( $this->largeur, 2));
        return $hypothenus;
    }
    public function getHauteur() {
        return $this->hauteur;
    }

    public function getLargeur() {
        return $this->largeur;
    }

    public function setHauteur($hauteur) {
        $this->hauteur = $hauteur;
    }

    public function setLargeur($largeur) {
        $this->largeur = $largeur;
    }


}