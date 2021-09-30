<?php
include('../includes/database.php');
    if(isset($_GET['id'])){
        delete_user($connect,$_GET['id'],'operateurs');
        header('location:operateurs.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>