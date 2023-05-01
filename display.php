<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .text-light{
            color:#fff;
            text-decoration:none;
        }
        .oper{
          margin:0.5em;  
        }
        .oper button{
            float:left;
            margin-left:0.5em;
        }
        #download{
          float:right;
        }
        #button{
          float:left;
        }
    </style>
</head>
<body>
   <div class="container">
    <button class="btn btn-primary my-5" id='button'><a href="user.php" class="text-light">Add User</a></button>
    <form action="download.php" method="post">
    <input class="btn btn-primary my-5" id='download' type="submit" value="Download" name="download">
    </form>
<table class="table table-hoverable">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Names</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Gender</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
 $sql="SELECT * from employee ;";
 $result=$con->query($sql);
 if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['username'];
        $email=$row['email'];
        $mobile=$row['phoneNumber'];
        $password=$row['password'];
        $gender=$row['gender'];
        echo ' <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$gender.'</td>
        <td>'.$password.'</td>
        <td class="oper">
        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
        </td>
      </tr>';
    };
 }
?>
     
  </tbody>
</table>
   </div> 
</body>
</html>