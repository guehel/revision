<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>vote cookies</title>

    </head>
    <body>
    <div>
        <div>
            <table>
            <tr><th colspan='2'>Resultat des sondages a ce jour</th></tr>
            <?php foreach($ as $choix=>$votants) {?>
            <tr><td><?=$choix ?></td><td><?=$votants ?></td></tr>
            <?php }?>
            </table>
        </div>
        <div>
            <form method='GET' action ='vote.php'>
                <fieldset>
                    <legend>Choix des programmes preferes</legend>
                    <input type='radio' name='vote' value="php"/>php<br/>
                    <input type='radio' name='vote' value="asp"/>asp<br/>
                    <input type='radio' name='vote' value="jsp"/>jsp<br/>
                    <input type ='submit' value='Envoyer'/>
                </fieldset>
            </form>
        </div>
    </div>
        <!--
        le script ne s'affiche que quand la variable vote est definie
        -->
        <?php 
        if (isset($vote)) {         
            ?>
            <script type =text/javascript>
                alert('Vous avez deja voté <?= $vote?>');
            </script>
        <?php } ?>
    </body>
</html>
