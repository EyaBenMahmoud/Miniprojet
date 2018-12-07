<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header>
        <?php
        require 'menu.php';
        ?>
        <?php require 'bdconnected.php'; ?>
        </header>
        <div class="cover">
           
        </div>
        <div class="options">
            <div class="options1">
                <a href="#" class="groupe"><div ><h2 class="titre" >Groupes</h2 ></div></a>
                <a href="#" class="cours"><div class="cours"><h2  class="titre">Supports de cours</h2 ></div></a>
            </div>
            <div class="options2">
                <a href="#" class="tests"><div ><h2 class="titre" >Tests Blancs</h2 ></div></a>
                <a href="#" class="notes"><div ><h2 class="titre" >Notes & Resultats</h2 ></div></a>
            </div>
        </div>
        <style>body{
    display: grid;
}

.cover{
    height: 200px;
    width: 100%;
    background-image: url(images/logan-isbell-672551-unsplash.jpg);
    background-size: cover;
    background-position:center ;
}

.groupe{
    text-decoration:none;
    margin:5px;
    background-color: #f35325;
    text-align:center;
}
.groupe:hover{
    background-color:#f35325ad;
    margin:20px;
}
.cours{
    text-decoration:none;
    margin:5px;
    background-color: #81bc06;
    text-align:center;
}
.cours:hover{
    background-color:#81bc06b5;
    margin:20px;
}
.tests{
    text-decoration:none;
    margin:5px;
    background-color: #05a6f0;
    text-align:center;
}
.tests:hover{
    
    background-color:#05a6f096;
    margin:20px;
}
.notes{
    text-decoration:none;
    margin:5px;
    background-color: #ffba08;
    text-align:center;
}
.notes:hover{
    background-color:#ffba08c4;
    margin:20px;
}
.options{
    
    margin:10px;
    height:350px;
    display: grid;
    grid-template-rows: 1fr 1fr;
    
}
.options1{
    
    display: grid;
    grid-template-columns: 2fr 1fr;
    
}
.options2{
    
    display: grid;
    grid-template-columns: 1fr 2fr;
    
}
.titre{
  
    color: white;
}
</style>
</body>
</html>