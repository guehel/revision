<?php

/*
 * creer un cookies sur les poste client pour verifier un sondage a ete fait
 */

class Sondage {

    public function verifierVote() {
        $aVote =  isset($_COOKIE['vote']);
        return $aVote;
    }

    public function enegistrerVote() {
        if(isset($_GET['vote'])){
            $vote = $_GET['vote'];
                 $this->enregistrerVotant($vote);
         setcookie('vote', $vote, 1000*2);
        }
    }
    
    private  function enregistrerVotant($vote){
        $sondage = fopen('sondage.txt', 'a');
        fwrite($sondage, $vote.'\n');
        fclose($sondage);
    }

}

$sondage = new Sondage();
$aVote = $sondage->verifierVote();
if (!$aVote) {
    $vote = $sondage->enegistrerVote();
   
}
include 'vueVote.php';
