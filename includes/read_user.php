<?php

require_once 'db.php';


// $users_query = "SELECT * FROM `users` ";

// $result = $conn->query($users_query);

// print_r($result);


function return_users_list()
{


    global $conn;

    $users_query = "SELECT * FROM `users` ";

    $result = $conn->query($users_query);

    return $result;
}

//print_r(return_users_list());

$result = return_users_list();

?>