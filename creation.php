<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $username= $_POST['fullname'];
    $phone_number= $_POST['mobile'];
    $email= $_POST['email'];
    $password=sha1($_POST['password']);
    $gender= $_POST['gender'];
    $sql="INSERT INTO employee(username,email,password,gender,phoneNumber) VALUES('$username','$email','$password','$gender','$phone_number')";

    $result = $con->query($sql);
    if($result ==true){
        //echo "Record created sucessfully";
        header('location:display.php');
    }else{
        echo 'Error:'.$sql.'<br>' .$con->error;
    };
    $con->close();
}
?>