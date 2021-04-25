<?php

session_start();

$con = mysqli_connect('localhost', 'root', 'blank');

mysqli_select_db($con, 'tutor');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$name = $_POST['email'];
$pass = $_POST['password'];

$s = " select * from usertable where firstname = '$firstname'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
  echo" Username Already Taken";
}
else
{
  $reg = " insert into usertable(firstname , lastname, email, password) values ('$firstname', '$lastname', '$email' , '$password')";
  mysqli_query($con, $reg);
  echo" Sign up successful";
}

?>