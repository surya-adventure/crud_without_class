<?php

    /*
        INSERT INTO `users` (`id`, `name`, `email`, `phone`, `created_at`)
                    VALUES (NULL, 'tyu', 'yuio', 'yuiop', current_timestamp());
    */


    echo "<pre>";


    print_r($_POST);

    require_once 'db.php';

        /*
            [name] => hjkl;
            [email] => hjkl
            [phone] => kl;
        */

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    $inser_data_query = " INSERT INTO `users` (`id`, `name`, `email`, `phone`, `created_at`)
                    VALUES (NULL, '$name', '$email', '$phone', current_timestamp())";

    $result =  $conn->query($inser_data_query);

        if($result){

            // echo "new user create"; 

            header('Location: ../index.php');
            
            }else{ echo "failed to create"; }