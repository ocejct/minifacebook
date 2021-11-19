<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
   
    <!-- typographie  -->
    <link href="css/typo.css" rel="stylesheet"> 
   
</head>
<body>



<img class="logo" src="img/feuille.png">  
    <form action="login" method="POST">
            <legend class="connexion">Connexion</legend>
                <label for="pseudo"></label>
                 <input type="text" placeholder="Pseudo"id="pseudo" name="pseudo"/>
        
                <label for="password"></label>
                <input type="password" placeholder="Votre mot de passe" id="password" name="password"/>
                
                <label for="remember"> Se souvenir de moi: <input type="checkbox" name="remember" id="remember"></label>
               <input type="submit" id="submit" />
        
    </form>


    
</body>
</html>