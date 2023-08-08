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


$artistname    = $_POST['artistname'];
$email  = $_POST['email'];
$password = $_POST['pass'];

$sql = "INSERT INTO 'artistlogin'('artistname', 'email', 'password') VALUES ('$artistname', '$email', '$password' )";

$result = mysqli_query($con , $sql);

if($resut)
{
    echo "login sucessfully!";
}

else
{
    echo "login failed....!";
}