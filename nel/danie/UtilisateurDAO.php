<?php
    require "../Models/utilisateur.class.php";

    $utilisateur = new Utilisateur( 1,  $_POST['Nom'],$_POST["Prenom"], $_POST["MotDePasse"],
    $_POST["Compte"],$_POST["Telephone"]);
    
    $user = "root" ; 
    $pwd = "" ; 
    $server = "localhost" ;
    $db = "appdb" ;
    try{
        $con = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pwd);
        $req = "Insert INTO utilisateur (Nom, Prenom, MotDePasse, Compte, Telephone) VALUES ('".$utilisateur->getNom()."', '".$utilisateur->getPrenom()."',
        '".$utilisateur->getMotDePasse()."', '".$utilisateur->getCompte()."', '".$utilisateur->getTelephone()."')";
        //$req = "Delete FROM categorie WHERE IdCategorie = 1" ;
        $con -> exec($req);
        echo "Reussie!";
        
    }catch(Exception $e){
       die ("Echec :".$e->getMessage());
    }

?> 