<?php

/*
 * creer un cookies sur les poste client pour verifier un sondage a ete fait
 */

class Sondage {

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
        $sondage = fopen('sondage.txt', 'a');
        fwrite($sondage, $vote . '\n');
        fclose($sondage);
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
include 'vueVote.php';
