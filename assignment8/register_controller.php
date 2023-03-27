<?php

$name = $email = $password = $confirm = "";
$error = array();

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $name = $_POST['name'];    
    $email = $_POST['email'];    
    $password = $_POST['password'];    
    $confirm = $_POST['confirm'];
    
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
}