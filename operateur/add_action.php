<?php
    include('../includes/database.php');
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $piece=$_POST['piece'];
    $numero=$_POST['numero'];
    $Gouvernorats=$_POST['Gouvernorats'];
    $Ville=$_POST['Ville'];
    $contact=$_POST['contact'];
    $motdepasse=get_user_password();    
    $pays=$_POST['pays'];
    $date=get_date();
    $espace=$contact;
    $query=$connect->prepare("INSERT INTO utilisateurs (nom,prenom,piece,numero,date_emission,gouvernorat,ville,contact,espace_client,password,pays) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
    $query->execute(array($nom,$prenom,$piece,$numero,$date,$Gouvernorats,$Ville,$contact,$espace,password_hash($motdepasse,PASSWORD_DEFAULT),$pays));
    header('location:utilisateurs.php');
?>