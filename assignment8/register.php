<?php
session_start();
require_once "functions.php";

$fname = $lname = $email = $password = $confirm = "";
$error = array();

// Validation 
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $fname = $_POST['fname'];    
    $lname = $_POST['lname'];    
    $email = $_POST['email'];    
    $password = $_POST['password'];    
    $confirm = $_POST['confirm'];
    
    // input validation
    foreach($_POST as $key=>$val){
        if($val === ""){
            $error[$key] = "$key field is required!";
        }else if($key === "email"){
            // email validation
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error[$key] = "Invalid email format";
              }
        }
    }

    // password confirmation
    if($password !== $confirm){
        $error['password'] = "Password mismatch";
    }

    // store user information 
    if(empty($error)){
        storeUser($fname,$email,md5($password));
        $_SESSION['login'] = true;
        $_SESSION['name'] = $fname;
        // redirect
        header("location:welcome.php");
    }else{
        echo "error";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-light">
    
<div class="container">
    <div style="height:100vh;" class="row d-flex align-items-center">
        <div class="col-md-6 offset-md-3 shadow rounded p-5 bg-white">
            <h1 class="text-center">Register Here</h1>
            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" name="fname" class="form-control mb-3" value="<?php echo $fname??"" ?>">
                    <p class="mb-2 text-danger">
                    <?php
                        echo isset($error['fname']) ? "First Name field is required": "";
                    ?></p>
                </div>
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" name="lname" class="form-control mb-3" value="<?php echo $lname??"" ?>">
                    <p class="mb-2 text-danger">
                    <?php
                        echo isset($error['lname']) ? "Last Name field is required": "";
                    ?></p>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control mb-3" value="<?php echo $email??"" ?>">
                    <p class="mb-2 text-danger">
                    <?php
                        echo isset($error['email']) ? "Enter a valid email! ": "";
                    ?></p>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control mb-3" value="<?php echo $password??"" ?>">
                    <p class="mb-2 text-danger">
                    <?php
                        echo isset($error['password']) ? $error['password']: "";
                    ?></p>
                </div>
                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" name="confirm" class="form-control mb-3" value="<?php echo $confirm??"" ?>">
                    <p class="mb-2 text-danger">
                    <?php
                        echo isset($error['confirm']) ? "Confirm password is required": "";
                    ?></p>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <span>Already registered!</span>
                <a href="login.php">Login here</a>
            </form>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>