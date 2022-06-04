<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $newpassword = $_POST['password'];

    resetPassword($email, $password);
}

$file =fopen("userdata.csv", "r");

function resetPassword($email, $password){
    //open file and check if the username exist inside
    //if it does, replace the password
    fopen;
    if (file_exists($file)){
        $newpassword = $password;
        fwrite($file);
        header("Location:  C:\Users\VANESSA\Desktop\FEMI\codes\PHP ZURI\php\login.html");
        echo "PASSWORD RESET SUCCESSFUL";
    }
    else {
        echo "THIS USER DOES NOT EXIST";
    }
}
echo "OKAY";


