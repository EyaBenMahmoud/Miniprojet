<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php require 'bdconnected.php'; ?>
  <?php require 'conditions.php';?>
    <title>Document</title>
</head>
<?php
  var_dump($_POST);
     $_SESSION['nom']=$_POST['nom'];
     $prenom=$_POST['prenom'];
     $mail=$_POST['mail'];
     $tel=$_POST['tel'];
     $cin=$_POST['cin'];
     $nce=$_POST['nce'];
     $pass_hache = password_hash($mdp, PASSWORD_DEFAULT);
     
     // Insertion
     $req = $bd->prepare('INSERT INTO inscription(nom, prenom, email,telephone,cin,mdp,nce) VALUES('.$nom.', '.$mdp.', '.$email.','.$tel.' ,'.$cin.','.$nce.', CURDATE())');
     /*$req->execute(array(
         ''
        )*/
         
?>

<body>

    <legend class="jumbotron"><h1>Ajouter un nouveau étudiant</h1></legend>
 
    <div class="container">
              <label><span <?php echo $msg;?>></span></label>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Nom :<span class="text-danger">* <?php echo $nomErr;?></span> </label>
            <input type="text" name="nom" class="form-control" placeholder="Enter le nom">
            </div>


        <div class="form-group">
            <label for="exampleInputPassword1">Prénom : <span class="text-danger">* <?php echo $prenomErr;?></span></label>
            <input type="text" name="prenom" class="form-control"  placeholder="Enter le prénom">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">E-mail :  <span class="text-danger">* <?php echo $emailErr;?></label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Télephone : *<span class="text-danger"><?php echo $telErr;?></span></label>
            <input type="tel" name="telephone" class="form-control"  placeholder="Enter le téléphone">
            </div>

        <div class="form-group">
            <label for="exampleInputEmail1">CIN : *<span class="text-danger"><?php echo $cinErr;?></span></label>
            <input type="number" name="cin" class="form-control" placeholder="Enter le CIN">
            </div>

         <div class="form-group">
                <label for="exampleInputEmail1">Numero de la carte étudiant : *<span class="text-danger"><?php echo $nceErr;?></label>
                <input type="number" name="nce" class="form-control" placeholder="Enter le numero de la carte etudiant">
                </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Mot de passe : *<span class="text-danger"><?php echo $mdpErr;?></span></label>
                <input type="password" name="mdp" class="form-control"  placeholder="Enter le mot de passe">
            </div>

       
        <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
</div>
</body>
</html>