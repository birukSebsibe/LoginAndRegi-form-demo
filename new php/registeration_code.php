<?php 
require_once('connection.php');
$fname = $lname = $gender = $email = $password = $pwd = '';

$fname=$POST['firstname'];
$lname=$POST['lastname'];
$gender=$POST['gender'];
$email=$POST['email'];
$pwd=$POST['password'];
$password=MD5($pwd);

$sql= "INSERT INTO usertable (Firstname,Lastname,Gender,Email,Password) VALUES ('$fname','$lname','$gender','$email','$password')";
$result=mysqlli_query($conn,$sql);
if($result){
    header("Location: login.php");
}
elsse{
    echo "Error: ".$sql";
}
?>