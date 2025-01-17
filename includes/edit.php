<?php 

    //echo "<pre>";

    //print_r($_GET['id']);

    $get_this_user_details = $_GET['id'];

    require_once 'db.php';


    //get this user from db
    $users_query = "SELECT * FROM `users` where id = $get_this_user_details limit 1";

    $result = $conn->query($users_query);



    $edit_this_user = mysqli_fetch_assoc($result);

    //echo "<pre>";

    //pass this user to front end
    //print_r($edit_this_user);

    $name = $edit_this_user['name'];

    $email = $edit_this_user['email'];

    $phone = $edit_this_user['phone'];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<center>

<h1>EDIT User</h1>
</center>

<div class="container">
<div class="row">
    <div class="col">

    </div>
    <div class="col-6">

        <form method="POST" action="update_user.php">

        
            <input type="hidden" name="id" value="<?php echo $get_this_user_details ?>">

            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>

                <input name="name" type="text" class="form-control" value="<?php echo $name ?>">

            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input name="email" type="text" class="form-control" value="<?php echo $email ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="phone" type="text" class="form-control" value="<?php echo $phone ?>" >
            </div>

            <button type="submit" class="btn btn-primary">Update</button>

        </form>



    </div>
    <div class="col">

    </div>
</div>
</div>

<center>
</body>
</html>