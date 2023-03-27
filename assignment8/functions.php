<?php



// store user data to users.csv file
function storeUser($fname, $email, $pass){
    $filename = "users.csv";

    file_put_contents($filename, "$fname,$email,$pass\n", FILE_APPEND);
}


// login user
function login($email, $pass){
    $filename = "users.csv";

    $fp = fopen($filename, 'r');

    while($user = fgetcsv($fp)){
        if($user[1] === $email && $user[2]===$pass){
            return $user;
        }
    }
    return false;
}