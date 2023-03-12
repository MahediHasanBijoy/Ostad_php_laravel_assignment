<?php
require_once "functions.php";

$name = $email = $password = $picture = "";
$error = array();

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $name = $_POST['name'];    
    $email = $_POST['email'];    
    $password = $_POST['password'];    
    $picture = $_POST['picture'];
    
    // error for empty input
    foreach($_POST as $key=>$val){
        if($val === ""){
            $error[$key] = "$key field is required!";
        }
    }
}


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
            <div class="col-md-6 offset-md-3 mt-5 ">
                <h2 class="text-center mb-4">Assignment</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" class="p-4 shadow rounded">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control mt-2 shadow border-0 <?php echo isset($error['name']) ? 'is-invalid':'';?>" name="name" id="name" placeholder="Enter your name" value="<?php echo !empty($name)?$name:""?>">
                        <?php
                        if(!empty($error['name'])):
                        echo "<div class='invalid-feedback'>
                            Please enter a username.
                        </div>";
                        endif;
                        ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control mt-2 shadow border-0 <?php echo isset($error['email']) ? 'is-invalid':'';?>" name="email" id="email" placeholder="Enter your email" value="<?php echo !empty($email)?$email:""?>">
                        <?php
                        if(!empty($error['email'])):
                        echo "<div class='invalid-feedback'>
                            Please enter an email.
                        </div>";
                        endif;
                        ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control mt-2 shadow border-0 <?php echo isset($error['password']) ? 'is-invalid':'';?>" name="password" id="password" placeholder="Enter your password" value="<?php echo !empty($password)?$password:""?>">
                        <?php
                        if(!empty($error['password'])):
                        echo "<div class='invalid-feedback'>
                            Please enter a password.
                        </div>";
                        endif;
                        ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="file">Profile Picture</label>
                        <input type="file" class="form-control mt-2 shadow border-0 <?php echo isset($error['picture']) ? 'is-invalid':'';?>" name="picture" id="file" >
                        <?php
                        if(!empty($error['picture'])):
                        echo "<div class='invalid-feedback'>
                            Please choose a profile picture.
                        </div>";
                        endif;
                        ?>
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <button class="btn btn-success mt-4 ">Submit</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>