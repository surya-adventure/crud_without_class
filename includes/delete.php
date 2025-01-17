<?php

    echo "delete";

    echo "<pre>";


    print_r($_GET['id']);

    $id= $_GET['id'];

    //DELETE FROM `users` WHERE `users`.`id` = 4

    require_once 'db.php';


    $del_this_user = "DELETE FROM `users` WHERE `users`.`id` = $id";


    $result = $conn->query($del_this_user);

    if($result){ 
        
        //echo "User deleted succesfully";

        header('Location: ../index.php');

    
    } else { echo "Failed to delete"; }


?>