<?php
   require 'bdconnected.php';
   $bd->exec('DELETE FROM inscription WHERE id='.$_GET['id']);
   header('Location:enseignant.php');

?>