<?php

	//Initialisation de variables pour accueillir les données saisies par l'utilisateur
	$nom = $prenom = $email = $tel = $cin = $nce = $mdp = $msg ="";

	//Initialisation des variables pour accueillir les messages d'erreur
    $nomErr = $emailErr = $prenomErr = $cinErr = $nceErr = $telErr = $mdpErr = "";
    
   /* if (!empty($post)){
       $valid=true;*/
      include 'function.php';
  if(empty($_POST["nom"])){
        $nomErr="le nom est obligatoire";
        $valid=false;
        }
    else{
        $nom=test_input($_POST['nom']);
        if (!preg_match("/^[a-zA-Z ]*$/",$nom)) {   
            $nomErr = "Seuls les lettres et l'espace sont permis";
              $valid=false;
    }}
    if(empty($_POST["prenom"])){
        $prenomErr="le prénom est obligatoire";
        $valid=false;
        }
    else{
        $nom=test_input($_POST['prenom']);
        if (!preg_match("/^[a-zA-Z ]*$/",$nom)) { 
            $prenomErr = "Seuls les lettres et l'espace sont permis";
              $valid=false;
    }}
    if (empty($_POST["email"])) {
        $emailErr = "Adresse mail obligatoire";
        $valid=false;
    } else {
        $email=test_input($_POST['email']);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Format adresse mail invalide";
                $valid=false;
                            }
                        }
                   /* if (empty($_POST['tel'])) {
                            $telErr = "le numéro de téléphone est obligatoire";
                              $valid=false;
                          }*/
                          if (empty($_POST['cin'])) {
                                $cinErr = "la numéro de la carte d'identité est obligatoire";
                                  $valid=false;
                              }
                              if (empty($_POST['nce'])) {
                                $nceErr = "la numéro de la carte étudiant est obligatoire";
                                  $valid=false;
                              }
                          if (empty($_POST["mdp"])) {
                 $mdpErr = "Mot de passe obligatoire";
            $valid=false;
                 } else {
                   $mdp=test_input($_POST['mdp']);
                  //Vérification de la longeur du mot de passe
                        if (strlen($mdp)<8) {
      $mdpErr = "La longeur minimale du mot de passe est de 8 caractères";
     $valid=false;
                }
             // mot de passe contient une lettre majuscule
    if (!preg_match("/[A-Z]/",$mdp)) {
          $mdpErr = "Le mot de passe doit contenir une lettre majuscule";
            $valid=false;
          }
              //Vérification du mot de passe contenant une lettre majuscule
         if (!preg_match("/[0-9]/",$mdp)) {
      $mdpErr = "Le mot de passe doit contenir un chiffre";
          $valid=false;
         }}
       /*   if ($valid=true) {
              
			$msg="votre inscription a ete effectuer avec succes !";
            exit;
        }
          }
             **/           
?>