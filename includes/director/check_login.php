<?php
    include('../database.php');
    session_start();

        //CONNEXION DU DIRECTEUR AU SITE WEB
        /*  
            1) On y fera 3 Opérations: Connexion, Récuperer Son compte en cas de mot de passe oublié
            2) Il peut également modifier son compte si cela le chante
            */
            $email=$_POST['login'];
            $password=$_POST['password'];
            $verify=$connect->prepare("SELECT * FROM operateurs WHERE connexion =?");
            $verify->execute(array($email));
        //Existence ou non
        if($verify->rowCount()>0){
            $result=$verify->fetchAll();
            foreach($result as $row){
               if(password_verify($password,$row["motdepasse"])){
                    $_SESSION["operateurs"]=$row["id"];
                    $output=array(
                        'error'=>false
                    );
                }else{
                    $output=array(
                        'error'=>true,
                        'type'=>'password',
                        'error_teacher_password'=>'Mot de passe incorrect'
                    );
                }
            }
        }else{
            $output=array(
                'error'=>true,
                'type'=>'username',
                'error_teacher_mail'=>'Le professeur tapé n\'existe pas'
            );
        }   
        echo json_encode($output);

?>