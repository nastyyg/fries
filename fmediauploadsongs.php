<?php

$sever   = "localhost";
$username = "nasty_yg";
$password = "";
$dbname = "friesmp3";

$con = mysqli_connect($sever, $username, $password, $dbname);

if(!$con)
{
    echo "not conected";
}

// start


$fullname    = $_POST['fullname'];
$email  = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];
$creditcardnumber = $_POST['creditcardnumber'];
$expmonth = $_POST['expmonth'];
$cvv = $_POST['cvv'];

$sql = "INSERT INTO 'localacc'('fullname', 'email', 'address', 'city', 'zipcode','creditcardnumber', 'expmonth', 'cvv') VALUES ($fullname', '$email', '$address', '$city', '$zipcode','$creditcardnumber', '$expmonth', '$cvv')";

$result = mysqli_query($con , $sql);

if($resut)
{
    echo "data submited";
}

else
{
    echo "error please try again....!";
}