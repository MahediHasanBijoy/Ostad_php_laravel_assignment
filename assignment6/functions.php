<?php


function uploadFile(){
    $target_dir = "uploads/";
    
    $temp_file = $_FILES['picture']['tmp_name'];
    // extension of the file
    $extension = strtolower(pathinfo($_FILES['picture']['name'],PATHINFO_EXTENSION));

    // creating filename with current time
    $filename = date("Ymdhis").$_FILES['picture']['name'];

    // check if the uploaded file is currect image type
    if($extension != "jpg" && $extension != "png" && $extension != "jpeg"
        && $extension != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        return false;
    }

    move_uploaded_file($temp_file, $target_dir.$filename);

    return $filename;
}


// store user in users.csv file
function storeUser($name, $email, $filename){
    $file = "users.csv";
    
    $data = "$name,$email,$filename\n";

    $handler = fopen($file, 'a+');
    fwrite($handler, $data);

    fclose($handler);
}


// read users from users.csv file
function getUsers(){
    $file = "users.csv";

    $users = array();

    $handler = fopen($file, "r");

    while($line = fgetcsv($handler)){
        if(!empty($line)){
            array_push($users, $line);
        }
    }

    return $users;
}