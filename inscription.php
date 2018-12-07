<?php
    require 'bdconnected.php';
    var_dump($_POST);
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $telephone=$_POST['telephone'];
    $cin=$_POST['cin'];
    $mpd=$_POST['mpd'];
    $nce=$_POST['nce'];
    $bd->exec('INSERT INTO inscription(nom,prenom,email,telephone,cin,mdp,nce) VALUES ("'.$nom.'","'.$prenom.'","'.$email.'","'.$telephone.'","'.$cin.'","'.$fonction.'","'.$mdp.'",,"'.$nce.'")');
    header('Location:enseignant.php');
?>
