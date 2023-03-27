<?php
session_start();
// logout the user
$logout = $_GET['logout'] ?? "";
if($logout == true){
    session_destroy();
    header("location:login.php");
}

// check if user logged in
if($_SESSION['login'] != true){
    header("location:login.php");
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3 shadow rounded p-5">
                <p class="h3">Welcome, <?php echo $_SESSION['name'];?></p>
                <p>As the blessed month of Ramadan begins, may your heart be filled with joy, your soul be filled with peace, and your mind be filled with clarity. May this month bring you closer to Allah, and may you find the strength and guidance to fulfill all of your spiritual goals. Ramadan Mubarak!</p>
                <a href="welcome.php?logout=true" class="btn btn-sm btn-danger mt-3">Logout</a>
            </div>
        </div>
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>