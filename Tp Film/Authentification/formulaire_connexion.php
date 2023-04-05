<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="formulaire_connexion.css"> -->
    <link rel="stylesheet" href="form_co.css">

    <title>Login</title>
</head>
<body>


        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification_Connexion2.0.php" method="POST">
                <h1>Connexion</h1>
                
                <label for="email">Entrez votre email :</label>
                <input type="email" id="email" name="email">
                <br>
                <label><b>Mot de passe :</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="motdepasse" required>

                <input type="submit" id='submit' value='LOGIN' name ="submit">


            <br> 
            <!-- <td style="width: 30%; text-align: right">Question sécurité :</td>
            <td>
              <select name="questions" size="5" multiple>
                <option>Quel est votre animal préféré ?</option>
                <option>Votre club préféré ?</option>
                <option>Quel est le nom votre premère école ?</option>
                <option>Le nom de votre animal de compagnie ?</option>
              </select>
            </td>
          </tr>
          <label><b>Reponse :</b></label>
          <input type="text" placeholder="Entrer le nom d'utilisateur" name="reponses" required>
          <br> -->
    
        <br>

        <p>Vous n'avez pas de compte ? <a href="formulaire_Inscription.php">Inscrivez-vous !</a></p>
                
                
        </form>
        </div>
        
</body> 
</html>

