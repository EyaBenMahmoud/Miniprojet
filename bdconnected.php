<?php
    try{
        $bd=new PDO('mysql:host=localhost;dbname=miniprojet','root','');
        //echo "connected successfuly";
    }
    catch(Exception $e){
        die($e->getMessage());
    }
?>