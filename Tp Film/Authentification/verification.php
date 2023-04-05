<?php
$hostname = 'localhost'; // nom ou IP du serveur
$username = 'root';                // nom de l'utilisateur
$password = '';               // mot de passe de l'utilisateur
$bdd = 'authentification';     // nom de la base de données

$connexion = new mysqli($hostname,$username,$password);

if($connexion == false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}

$newPDO = new PDO('mysql:host=127.0.0.1;dbname=authentification','root','');





if (isset ($_POST['submit'])){
    $nom_utilisateur = $_POST['username'];
    $motdepasse = $_POST['motdepasse'];
    $email = $_POST['email'];
    $question = $_POST['questions'];
    $reponse = $_POST['reponses'];
    echo "Vous êtes connecté ! ";
    echo"<br>";

    $requete = $newPDO->prepare("INSERT INTO `users`(`id`, `username`, `email`, `motdepasse`,`question`,`reponse`) VALUES ('','$nom_utilisateur','$email','$motdepasse','$question','$reponse')");
    $requete->execute();

    
};





