<?php

$file = fopen("userdata.csv", "w");
    

if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    
    // echo "OKAY"
    $file;
    fclose($file);
}
echo "USER SUCCESSFULLY REGISTERED";


