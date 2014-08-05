
<?php

/*
 * creer un cookies sur les poste client pour verifier un sondage a ete fait
 */

class Sondage {
    private $fichierSondage ='sondage.txt';

    public function verifierVote() {
        $aVote = isset($_COOKIE['vote']);
        return $aVote;
    }

    public function enegistrerVote() {
        if(isset($_GET['vote'])){
        $vote = $_GET['vote'];
        $this->enregistrerVotant($vote);
        setcookie('vote', $vote, time()+ 36000 * 2);
        }
    }
    
    /** lier le cookie vote
    */
    public function obtenirVote(){
       
            return $_COOKIE['vote'];
       
    }
    /** ecrie le texte vote ds le fichier sondage
    */
    private function enregistrerVotant($vote) {
        $sondage = fopen($fichierSondage, 'a');
        fwrite($sondage, $vote . '\n');
        fclose($sondage);
    }
    /**retourne un tableu indexe du nombre de votes par choix
    */
    public function lireVotes(){
        $php = 0;
        $asp= 0;
        $jsp = 0;
        $sondage = compact('php', 'asp', 'asp');
        $listeDesVotes = $this->listerVotes();
        $sondage  = $this->compterVotes($sondage, $listeDesVotes);
        return $sondage;
    }
    /*lie le fichier et renvoie un tableau du contenu
    */
     private function listerVotes() {
        $sondage = fopen($fichierSondage, 'r');
        $fileContent = fread($sondage, filesize($fichierSondage));
        fclose($sondage);
        return explode('\n', $fileContent );
    }
    /**incremente le tableau des sondages selon les votes */
    private function compterVotes($sondage, $listeDesVote){
        foreach ($listeDesVote as $vote){
            $sondage[$vote]++;
        }
        return $sondage;
    }

}
    /**Controleur de l'application */
$sondage = new Sondage();
$aVote = $sondage->verifierVote();
$vote ;
if (!$aVote) {
    $sondage->enegistrerVote();
}else{
  $vote  = $sondage->obtenirVote();
  
}
$reponses = $sondage->listerVotes() ;
include 'vueVote.php';
