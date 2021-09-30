<?php
    include('../includes/database.php');
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $date=get_date();
    $connexion=rand(10000,99999);
    $motdepasse=password_hash($nom,PASSWORD_DEFAULT);   
    $query=$connect->prepare('INSERT INTO operateurs (nom,prenom,date_arrivve,motdepasse,connexion) VALUES (?,?,?,?,?)');
    $query->execute(array($nom,$prenom,$date,$motdepasse,$connexion));
    header('location:index.php');

?>