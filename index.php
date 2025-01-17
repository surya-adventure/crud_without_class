<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <br>

    <center>

        <h1>Add User</h1>
    </center>

    <div class="container">
        <div class="row">
            <div class="col">

            </div>
            <div class="col-6">

                <form method="POST" action="includes/create.php">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>

                        <input name="name" type="text" class="form-control">

                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input name="email" type="text" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="phone" type="text" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>



            </div>
            <div class="col">

            </div>
        </div>
    </div>

    <center>

        <h1>List User</h1>
    </center>


    <div class="container">
        <div class="row">
            <div class="col-12">


                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        require_once 'includes/read_user.php';

                        $i = 0;
                        while ($row = mysqli_fetch_assoc($result)) {

                            // print_r(value: $row);

                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $phone = $row['phone'];

                            $i++;

                            echo "    <tr>
                                        <th scope='row'>$i</th>
                                          <td>$name</td>
                                            <td>$email</td>
                                            <td>$phone</td>

                                                <td>          
                                                    <a style='color:blue' href='includes/edit.php?id=$id' >EDIT</a> |
                                                    <a style='color:green' href='includes/delete.php?id=$id' >Delete</a>
                                                </td>

                                             </tr>
                                
                                ";
                        }

                        ?>





                    </tbody>
                </table>


            </div>
        </div>
    </div>


</body>

</html>