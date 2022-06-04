<?php
 $filename = "userdata.csv";
   $fp = fopen('userdata.csv' , 'r');
   $check_username = '$username';
    $check_password = '$password';


if(isset($_POST['submit'])){
    $username =  $_POST['fullname'];
    $password =  $_POST['password'];

loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
  if ($username == $check_username && $password == $check_password ){
header("Location: C:\Users\VANESSA\Desktop\FEMI\codes\PHP ZURI\php\dashboard.php");
exit();
  }
else {
    echo "PASSWORD OR USERNAME IS INCORRECT";
}
}

echo "OKAY";

