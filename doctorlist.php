<?php
session_start();
header('location:doctorlist.php');
$con= mysqli_connect('localhost','root','');
mysqli_selecet_db($con,'X');
$name = $_POST['X'];
$s="select * from X where name='$name' ";
$result= mysqli_query($con,$s);
$num= mysqli_num_rows($result);

if($num==1){
    echo"Username Already registered";
}else{
    $reg = "insert into X(name,) values('$name')";
    mysqli_query($con,$reg);
    header('location:psychology.php');
}
?>
