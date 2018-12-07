<?php
    require 'bdconnected.php';
    $_SESSION['nom']=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $telephone=$_POST['telephone'];
    $cin=$_POST['cin'];
    $mpd=$_POST['mpd'];
    $nce=$_POST['nce'];
    $bd->exec('UPDATE inscription SET nom="'.$nom.'",prenom="'.$prenom.'",email="'.$email.'",telephone="'.$telephone.'",cin="'.$cin.'",mdp="'.$mdp.'",nce="'.$nce.'" WHERE id='.$id);
    header('Location:enseignant.php');
    ?>
