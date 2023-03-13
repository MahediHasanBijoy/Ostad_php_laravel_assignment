<?php
require_once "functions.php";
session_start();
// get users from users.csv file
$users = getUsers();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body class="bg-light">
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
            <div class="active d-flex justify-content-end ">
                <p class="p-3 bg-light shadow w-50 rounded"><b>Current User:</b> <?php echo $_COOKIE['user']?? "" ;?></p>
            </div>
                <h1 class="text-center mb-3">Users List</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Profile Picture</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($users as $user):
                        ?>
                        <tr>
                            <td><?php echo $user[0];?></td>
                            <td><?php echo $user[1];?></td>
                            <td><img width="50px" class="img-fluid" src="uploads/<?php echo $user[2];?>" alt=""></td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>