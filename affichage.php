<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <title>Document</title>
    <?php require 'bdconnected.php'; ?>
</head>
<body>
    <div class="">
        <div  class="jumbotron">
            <h1>Liste des etudiants</h1>
        </div>
       
        <a class="btn btn-info" name="" href="ajout.php" role="button">Ajouter un nouveau</a>
        <div class="espace"></div>
        <table class="table table-hover">
          <thead class="">
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>E-mail</th>
                <th>Téléphone</th>
                <th>CIN</th>
                <th>Mot de passe</th>
                <th>Numéro de la carte etudiant</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $reponse = $bd->query('SELECT * FROM inscription') ;
            while ($data = $reponse->fetch()){
                echo '<tr>';
                echo '<td>'.$data['id'];
                echo '</td><td>'.$data['nom'];
                echo '</td><td>'.$data['prenom'];
                echo '</td><td>'.$data['email'];
                echo '</td><td>'.$data['telephone'];
                echo '</td>'.'<td>'.$data['cin'];
                echo '</td>'.'<td>'.$data['mdp'];
                echo '</td>'.'<td>'.$data['nce'];
                echo '</td>';
                echo '<td><a href="modifier.php?id='.$data["id"].'"><i class="fas fa-user-edit">&nbsp;Editer</i></a>&nbsp;&nbsp</td>';
                echo '<td><a href="supprimer.php?id='.$data["id"].'"><i class="fas fa-user-times">&nbsp;Supprimer</i></a></td>';
                echo '</tr>';
            }
            ?>
        </tbody>
        </table>
        </div>
</body>
<style>
    .espace{
        padding:20px;
    }

</style>
</html>