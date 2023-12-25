<?php
session_start();
header('location:problem.php');
$con= mysqli_connect('localhost','root','');
mysqli_selecet_db($con,'brief');
$name = $_POST['problem'];
$phone = $_POST['test'];
$email = $_POST['done'];
$confirm = $_POST['meds'];
$s="select * from problem where name='$name' ";
$result= mysqli_query($con,$s);
$num= mysqli_num_rows($result);

if($num==1){
    echo"Already taken";
}else{
    $reg = "insert into login(name, phone, email, password, confirmpassword) values('$name', '$phone', '$email', '$confirm')";
    mysqli_query($con,$reg);
    echo "Registration succesful"
}
?>
