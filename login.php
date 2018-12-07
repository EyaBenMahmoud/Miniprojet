<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="CSS\bootstrap.min.css">

    <title>Home Page</title>
</head>
<body class="connexion">
  

    <header>
    </header>
    <div class="cadre">

        <form id="formulaire" action="login_verify.php" method="post">
        <img src="images/mslogo.png" alt="">
           <label id="elem" for="" id="">Connexion</label>
           <input class="form-group" type="email" name="mail" id="mail" placeholder="Saisir votre adresse E-mail">
           <input class="form-group" type="password" name="mdp" id="mdp" placeholder="entrer votre mot de passe">
           Vous voulez un nouveau compte ? <a href="inscription.php">Créer gratuitement un compte</a>
           <button class="suiv" type="submit" href="">Suivant</button>
        </form>
    </div>
    <style>
            .connexion{
                background-image:url(images/apple-check-computer-7079.jpg);
                background-size: cover;
            }
            .cadre{

                border-radius: 0px;
                margin-left: 430px;
                margin-top: 120px;
                padding-top: 30px;

                width: 500px;
                height: 400px;;
                background-color:#f1ededb5;
            }
            #formulaire{
                display:grid;
                grid-template-rows:1fr 1fr 0.5fr 0.5fr 0.5fr 1fr;
                padding-top: 20px;
                padding-left: 20px;
                padding-right: 20px

            }
            #elem{
                margin: 10px;
                color: white;
                font-size: 20px;
            }
            .suiv{
                margin-top:20px;
                margin-left:120px;
                height:50px;
                width: 200px;
                color: #fff;
                background-color: #03a5ef;
                border-color: #03a5ef;
                border-style: none;
                border-radius: 5px;
            }
    </style>
</body>
</html>
