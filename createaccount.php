<?php

$sever   = "localhost";
$username = "nasty_yg";
$password = "";
$dbname = "friesmedia";

$con = mysqli_connect($sever, $username, $password, $dbname);

if(!$con)
{
    echo "not conected";
}

// start


$name    = $_POST['name'];
$email  = $_POST['email'];
$gender = $_POST['gender'];
$password = $_POST['pass'];
$confirmpassword = $_POST['comfirmpass'];

$sql = "INSERT INTO 'signup'('name', 'email', 'gender', 'password', 'confirmpassword') VALUES ('$name', '$email', '$gender', '$password', '$confirmpassword')";

$result = mysqli_query($con , $sql);

if($resut)
{
    echo "data submited";
}

else
{
    echo "query failed....!";
}