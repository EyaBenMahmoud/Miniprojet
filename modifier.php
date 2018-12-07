<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

    <legend class="jumbotron"><h1>Modifier l'étudiant</h1></legend>
    <?php
    require 'bdconnected.php';
    $reponse = $bd->query('SELECT * FROM inscription WHERE id='.$_GET['id']);
    $data = $reponse->fetch();
    ?>
    <div class="container">

        <form action="mettreajour.php" method="POST">
        <div class="form-group">
                <label for="exampleInputEmail1">Identifiant : </label>
                <input type="text" name="id" class="form-control" value="<?= $data['id'] ?>" disabled>

                </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Nom : </label>
            <input type="text" name="nom" class="form-control" placeholder="Enter le nom"value="<?= $data['nom'] ?>">
            </div>


        <div class="form-group">
            <label for="exampleInputPassword1">Prénom : </label>
            <input type="text" name="prenom" class="form-control"  value="<?= $data['prenom'] ?>">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">E-mail : </label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $data['email'] ?>">
            </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Télephone : </label>
            <input type="tel" name="telephone" class="form-control"  value="<?= $data['telephone'] ?>">
            </div>

        <div class="form-group">
            <label for="exampleInputEmail1">CIN : </label>
            <input type="number" name="cin" class="form-control" value="<?= $data['cin'] ?>">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Mot de passe : </label>
                <input type="password" name="mdp" class="form-control"  value="<?= $data['mdp'] ?>">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Numero de la carte étudiant : </label>
                <input type="number" name="nce" class="form-control" value="<?= $data['nce'] ?>">
                </div>


        <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
</div>
</body>
</html>
