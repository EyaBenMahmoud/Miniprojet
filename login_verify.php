<?php
var_dump($_POST);

//$mdp= (isset($_POST['mdp'])) ? mysqli($_POST['mdp']) :""; 
// Si on a soumit le formulaire (si on a cliqué sur "Se connecter") 
if(isset($_POST['go_mail'])) { 

// Si les deux champs ne sont pas vides 
if(!empty($_POST['mail']) && !empty($_POST['mdp'])) { 

// On éxécute une requête pour détecter si le mail entré existe dans la base 
$query = $bd->prepare("SELECT * FROM inscription WHERE mail = '".$_POST['mail']."'"); 

// Si on a un résultat => il existe 
if(mysql_num_rows($query) == 1) { 
$user= mysql_fetch_object($query); 


// On vérifie la concordance des mots de mdpe 
if(($_POST['mdp']) == $user->mdp) { 

// Si on arrive jusque ici c'est que le couple mail / mot de mdpe est résolu 
// On lance donc la session 

session_start(); 
$_SESSION['id'] = $user->id; 
$_SESSION['mail'] = $user->mail;
echo 'vous etes connecté !';
} else { 
echo 'Mauvais mot de mdpe pour cet utilisateur.'; 
} 

} else { 
echo 'verifier votre adresse email'; 
} 
} else { 
echo 'Vous devez remplir tous les champs !'; 
} 
} 

?>



