<?php
$con=new mysqli('localhost','root','','employee');
if($con){
    // echo "connection successfull <br>";
}else{
    die(mysqli_error($con));
}
?>