<?php
session_start();
$con = mysqli_connect('localhost','root','yopass');
mysqli_select_db($con, 'phpdb');
$name=$_POST['user'];
$pass=$_POST['password'];
$s="select * from usertable where name ='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    header('location:login.php');
}
else{
    header('location:home.html');
}
?>