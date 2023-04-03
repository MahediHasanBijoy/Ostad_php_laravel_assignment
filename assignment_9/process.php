<?php
$name = $_POST['name'] ?? "";
$email = $_POST['email'] ?? "";
$subject = $_POST['subject'] ?? "";
$comment = $_POST['comment'] ?? "";

echo $name, $email, $subject, $comment;
if($name && $email && $subject && $comment){
    header("location:contact.php?success=true");  
}