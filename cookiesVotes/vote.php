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
    
    
    public function obtenirVote(){
       
            return $_COOKIE['vote'];
       
    }

    private function enregistrerVotant($vote) {
        $sondage = fopen($fichierSondage, 'a');
        fwrite($sondage, $vote . '\n');
        fclose($sondage);
    }
    
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
    
    private function compterVotes($sondage, $listeDesVote){
        foreach ($listeDesVote as $vote){
            $sondage[$vote]++;
        }
        return $sondage;
    }

}

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
