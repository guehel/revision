<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>vote cookies </title>

    </head>
    <body>
        <form method='GET' action ='vote.php'>
            <fieldset>
                <legend>Choix des programmes preferes</legend>
                php <input type='radio' name='vote' value="php"/><br/>
                asp   <input type='radio' name='vote' value="asp"/><br/>
                jsp      <input type='radio' name='vote' value="jsp"/><br/>
                <input type ='submit' value='Envoyer'/>
            </fieldset>
        </form>
        <?php if ($aVote) { ?>
            <script type =text/javascript>
                alert('Vous avez deja voté');
            </script>
        <?php } ?>
    </body>
</html>
