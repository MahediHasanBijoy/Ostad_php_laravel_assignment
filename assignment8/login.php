<?php
session_start();
require_once "functions.php";

    $email = $password = "";
    $error = array();
    
    // Validation 
    if($_SERVER['REQUEST_METHOD'] === "POST"){ 
        $email = $_POST['email'];    
        $password = $_POST['password'];  
        
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

        // user login
        if(empty($error)){
            // getting the logged in user
           $user = login($email, md5($password));
           if($user){
                $_SESSION['name'] = $user[0];
                $_SESSION['login'] = true;
                header("location:welcome.php");
                die();
           }else{
                $login_failed = true;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-light">
    
<div class="container">
    <div style="height:100vh;" class="row d-flex align-items-center ">
        <div class="col-md-6 offset-md-3  shadow rounded p-5 bg-white">
            <h1 class="text-center">Login Here</h1>
            <?php
            if(isset($login_failed) && $login_failed == true){
                echo "<p class='text-danger m-0'>Your login credentials doesn't match</p>";
            }
            ?>
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control mb-3" value="<?php echo $email??""?>">
                    <p class="text-danger">
                    <?php
                        echo isset($error['email']) ? $error['email']: "";
                    ?></p>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control mb-3" value="<?php echo $password??""?>">
                    <p class="text-danger">
                    <?php
                        echo isset($error['password']) ? $error['password'] : "";
                    ?></p>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <span>Not Registered yet!</span>
                <a href="register.php">Register here</a>
            </form>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>