<?php
include 'connection.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM employee where id=$id";
$result=$con->query($sql);
$row=mysqli_fetch_assoc($result);
$name=$row['username'];
$email=$row['email'];
$mobile=$row['phoneNumber'];
$password=$row['password'];
$gender=$row['gender'];
if(isset($_POST['update'])){
    $fullname= $_POST['fullname'];
    $phone_number= $_POST['mobile'];
    $email= $_POST['email'];
    $password=sha1($_POST['password']);
    $gender= $_POST['gender'];
    $sql="UPDATE employee SET username='$fullname',email='$email',password='$password',gender='$gender',phoneNumber='$phone_number' WHERE id=$id";

    $result = $con->query($sql);
    if($result ==true){
        //echo "Record was updated sucessfully";
        header('location:display.php');
    }else{
        echo 'Error:'.$sql.'<br>' .$conn->error;
    };
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="container my-5">
  <h1>Update your account</h1>
<form method="POST">
<div class="mb-3 row">
  <label for="exampleInputEmail" >Email </label>
  <input type="email" class="form-control"  placeholder="Enter your email" id="exampleInputEmail" name="email" value=<?php echo $email ?> />
</div>
<div class="mb-3 row">
    <label for="examplenputPassword">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password" name="password" value=<?php echo $password; ?>>
</div>
<div class="mb-3 row">
    <label for="exampleInputFullNames">Full Names</label>
    <input type="text" class="form-control" id="exampleInputfullnames1" placeholder="Enter your full names" name="fullname" value=<?php echo $name; ?>>
</div>
<div class="mb-3 row">
    <label for="exampleInputFullNames">Phone number</label>
    <input type="nu,ber" class="form-control" id="exampleInputPhoneNumber1" placeholder="Enter your phone number" name="mobile" value=<?php echo $mobile; ?>>
</div>
<div>
    <label for="exampleInputRadio">Gender:</label>
    <input type="radio" id="exampleRadio1" value='Male' name="gender" value=<?php echo $gender; ?>><label for="male">Male</label>
    <input type="radio"  id="exampleRadio1" value='Female' name="gender" value=<?php echo $gender; ?>><label for="female" >Female</label>
</div>
<div class="button">
<input class="btn btn-primary" type="submit" value="Update" name="update">
</div>
</form>
</div>
</body>
</html>