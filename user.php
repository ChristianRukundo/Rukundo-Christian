<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="container my-5">
  <h1>Register</h1>
<form action="creation.php" method="POST">
<div class="mb-3 row">
  <label for="exampleInputEmail" >Email </label>
  <input type="email" class="form-control"  placeholder="Enter your email" id="exampleInputEmail" name="email" >
</div>
<div class="mb-3 row">
    <label for="examplenputPassword">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password" name="password">
</div>
<div class="mb-3 row">
    <label for="exampleInputFullNames">Full Names</label>
    <input type="text" class="form-control" id="exampleInputfullnames1" placeholder="Enter your full names" name="fullname">
</div>
<div class="mb-3 row">
    <label for="exampleInputFullNames">Phone number</label>
    <input type="nu,ber" class="form-control" id="exampleInputPhoneNumber1" placeholder="Enter your phone number" name="mobile">
</div>
<div>
    <label for="exampleInputRadio">Gender:</label>
    <input type="radio" id="exampleRadio1" value='Male' name="gender"><label for="male">Male</label>
    <input type="radio"  id="exampleRadio1" value='Female' name="gender"><label for="female">Female</label>
</div>
<div class="button">
<input class="btn btn-primary" type="submit" value="Submit" name="submit" >
</div>
</form>
</div>
</body>
</html>