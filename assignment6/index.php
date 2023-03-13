<?php
require_once "functions.php";
session_start();

$name = $email = $password = $picture = "";
$error = array();

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $name = $_POST['name'];    
    $email = $_POST['email'];    
    $password = $_POST['password'];    
    $picture = $_FILES['picture']['size'];
    
    // input validation
    foreach($_POST as $key=>$val){
        if($val === ""){
            $error[$key] = "$key field is required!";
        }else if($key === "email"){
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error[$key] = "Invalid email format";
              }
        }
    }

    // file upload 
    if($picture > 0){
        $filename = uploadFile();
        if(!$filename){
            $error['picture'] = "sorry, only jpg, jpeg, png & gif files are allowed.";
        }else if(empty($error)){
            // store user in file
            storeUser($name, $email, $filename);
            
            // set cookie 
            setcookie('user',$name);

            unset($name, $email, $password);
            // redirect to show users page
            header("location:show_users.php");
        }
    }else{
        $error['picture'] = "Please choose a photo";
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
        <a href="show_users.php" class="btn btn-primary btn-sm mt-3 ms-5">Show Users</a>
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-3 mb-5">
                <h2 class="text-center mb-4">Assignment</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data" class="p-4 shadow rounded">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control mt-2 shadow border-0 <?php echo isset($error['name']) ? 'is-invalid':'';?>" name="name" id="name" placeholder="Enter your name" value="<?php echo !empty($name)?$name:""?>">
                        <?php
                        if(!empty($error['name'])):
                        echo "<div class='invalid-feedback'>
                            {$error['name']}
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
                            {$error['email']}
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
                            {$error['password']}
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
                            {$error['picture']}
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