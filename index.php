<?php
    // on lie la base de donnée
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=facenook','root','');

    if(isset($_POST['forminscription'])){
        if((!empty($_POST['pseudo'])) AND (!empty($_POST['mail'])) AND (!empty($_POST['mail2'])) AND (!empty($_POST['password'])) AND (!empty($_POST['password2']))){
            echo "ok";
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $mail = htmlspecialchars($_POST['mail']);
            $mail2 = htmlspecialchars($_POST['mail2']);
            // on hache le mot de passe pour la base de données
            $password = sha1($_POST['password']);
            $password2 = sha1($_POST['password2']);

            $pseudoLength = strlen($pseudo);
            if ($pseudoLength <= 255){
                
            }
            else {
                $error = "Votre pseudo ne doit pas contenir plus de 255 caractères";
            }
        }
        else {
            $error = "Tous les champs doivent être complétés !";
        }
    }
?>

<html>
    <head>
        <title>Facenook</title>
        <meta charset="utf-8">
    </head>
    <body>
        <div align="center">
            <h3>Inscription</h3>
            <br /><br /><br />
            <form method="POST" action="">
                <table>
                    <tr>
                        <td align="right">
                            <label for="pseudo">Pseudo :</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Pseudo" id="pseudo" name="pseudo"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="mail">Mail :</label>
                        </td>
                        <td>
                            <input type="email" placeholder="Votre adresse mail" id="mail" name="mail"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="mail2">Confirmation du mail :</label>
                        </td>
                        <td>
                            <input type="email" placeholder="Confirmez l'adresse mail" id="mail2" name="mail2"/>
                        </td>
                    </tr>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="password">Mot de passe :</label>
                        </td>
                        <td>
                            <input type="password" placeholder="Votre mot de pasese" id="password" name="password"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="password2">Confirmation du mot de passe :</label>
                        </td>
                        <td>
                            <input type="password" placeholder="Votre mot de pasese" id="password2" name="password2"/>
                        </td>
                    </tr>
                        <td></td>
                        <td>
                            <input type="submit" name="forminscription" value="S'inscire"/>
                        </td>
                </table>
            </form>
            <?php

                if (isset($error)){
                        echo '<font color="red">'.$error."</font>";
                }
            ?>

    </body>
</html>