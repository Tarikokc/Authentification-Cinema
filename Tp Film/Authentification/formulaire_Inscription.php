<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="formulaire.css"> -->
    <link rel="stylesheet" href="form.css">

    <title>Login</title>
</head>
<body>


        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h1>Inscription</h1>
                
                <label for="email">Entrez votre email :</label>
                <input type="email" id="email" name="email">

                <br>
                <br>

                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
                <br>
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="motdepasse" required>

                <label for="pet-select">Questions de sécurité :</label>

                <select name="questions" id="pet-select">
            
                    <option>Quel est votre animal préféré ?</option>
                    <option>Votre club préféré ?</option>
                    <option>Quel est le nom votre premère école ?</option>
                    <option>Le nom de votre animal de compagnie ?</option>
                </select>

                
                
            <br>  
      
          <label><b>Reponse :</b></label>
          <input type="text" placeholder="Entrer le nom d'utilisateur" name="reponses" required>
        <br>
          <input type="submit" id='submit' value='LOGIN' name ="submit">
        <br>
        <p>Vous possedez deja un compte ? <a href="http://localhost/php_roos/formulaire_connexion.php">Connectez-vous !</a></p>

        </form>
        
        </div>
        
</body> 
</html>

