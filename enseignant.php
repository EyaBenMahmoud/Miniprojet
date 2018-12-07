<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="CSS\bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
   
    
        <?php
        require 'menu.php';
        ?>
       
     
        <div class="body">
        <nav class="nav">
            <div class="profil">
                <img class="avatar" src="Images\userA.png" alt="..." class="img-circle">
            
            <a href="http://"> Nom & Prenom <?php?> </a>
            </div>
            <ul class="part">
                <a  href="#" class="items"><li>Paramétres du compte</li></a>
                <a  href="#" class="groupes"><li>Groupes</li></a>
                <ul>
                    <a href="#" class="modules"><li>HTML</li></a>
                    <ul class="sous-menu">
                        <a href="#" class="items"><li>Etudiants</li></a>
                        <a href="#" class="items"><li>Gérer les ressource</li></a>
                        <a href="#" class="items"><li>Rapports des resultats</li></a>
                    </ul>
                   <a href="#" class="modules"> <li>Module 2</li></a>
                    <ul class="sous-menu">
                       <a href="#" class="items"> <li>Etudiants</li></a>
                       <a href="#" class="items"> <li>Gérer les ressource</li></a>
                       <a href="#" class="items"> <li>Rapports des resultats</li></a>
                    </ul>
                   <a href="#" class="modules"> <li>Module 3</li></a>
                    <ul class="sous-menu">
                        <a href="#" class="items"><li>Etudiants</li></a>
                        <a href="#" class="items"><li>Gérer les ressource</li></a>
                        <a href="#" class="items"><li>Rapports des resultats</li></a>
                    </ul>
                    <a href="#" class="modules"><li>Module 4</li></a>
                    <ul class="sous-menu">
                        <a href="#" class="items"><li>Etudiants</li></a>
                        <a href="#" class="items"><li>Gérer les ressource</li></a>
                       <a href="#" class="items"> <li>Rapports des resultats</li></a>
                    </ul>
                </ul>
                
            </ul>
        </nav>

        <section>
             <?php require 'affichage.php';?>
        </section>
        </div>

        
<style>
    .body{
        display:grid;
        grid-template-columns:0.5fr 5fr;
    }
    .part{
        

        display:grid;
          grid-template-rows:1fr 1fr;
    }
      .sous-menu{
          visibility:hidden;
          height:0;
          background-color:#e0dcdc8c;
          border-color:white;      }
      .modules{
        background-color:#3f51b5db;
          visibility:hidden;
          height:0;
      }
      ul{
        list-style-type: none;
        color:#ffff;
        
      }
      .nav{
        
          margin:0px;
          display:grid;
          grid-template-rows:;
          width:300px;
      }
      .profil{
          display:grid;
          grid-template-rows:;
          text-align:center;
          margin:50px;
      }
      .avatar{
          width:200px;
          height:200px;
      }
</style>
    <script>
         $(document).ready(function(){
           $(".groupes").click(function(){
            $(".modules").css({"height":"100%","visibility": "visible"});
           });

           $(".modules").click(function(){
            $(".sous-menu").css({"height":"100%","visibility": "visible"});
           });
           
        });
    </script>
</body>
</html>