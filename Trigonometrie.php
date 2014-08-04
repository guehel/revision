<?php

/*
 * classe php pour serialiser un objet php a partir d'un formulaire
 * autteur: Guehel Bouanga
 * date: 2014/08/04
 *

 */
require_once 'Rectangle.php';

Class Trigonometrie {
    /*traite la requete get et retourne l'object rectangle 
     */

    public function traiter() {
        $rectangle = null;
        if (isset($_GET['hauteur']) && isset($_GET['hauteur'])) {
          
            $hauteur = $_GET['hauteur'];
            trim($hauteur);
            $largeur = $_GET['largeur'];
            trim($largeur);
            if (is_numeric($largeur) && is_numeric($largeur)) {
                $rectangle = new Rectangle($hauteur, $largeur);
                $rectableSerialise = serialize($rectangle);
                $this->save($rectableSerialise);
            }
        }
        return $rectangle;
    }

    /* sauvegarde un objet serialise dans un fichier en lecture avec ajout
     */

    private function save($figure) {
        $fichier = fopen("rectangle.txt", 'a');
        fwrite($fichier, $figure);
        fclose($fichier);
    }

}

$trigo = new Trigonometrie();
$rectangle = $trigo->traiter();
$hypothenuse = 0;
if ($rectangle != null)
    $hypothenuse = $rectangle->hypothenus();
include 'vueTrigo.php';
