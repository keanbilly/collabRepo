<?php
include './header.php';


?>
<body>

<?php
$db = new LogIn;
?>


<div class="container">
<div class="col-md-4 offset-md-4 mt-5">


  
<form>

<div class="myDiv">

<div class="mb-3">
    <label for="Fname1" class="form-label">First Name </label>
    <input type="text" class="form-control" id="Fname1" required>
  </div>

 
  <div class="mb-3">
    <label for="Lname1" class="form-label">Last Name </label>
    <input type="text" class="form-control" id="Lname1" required>
  </div>


  <div class="mb-3">
    <label for="Email1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp" required>
   

  <div class="mb-3">
    <label for="Bday" class="form-label">Birthday </label>
    <input type="text" class="form-control" id="Bday" required>
  </div>

  <div class="mb-3">
    <label for="Username1" class="form-label">User Name</label>
    <input type="text" class="form-control" id="Username1" required>
  </div>

  <div class="mb-3">
    <label for="Password1" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password1" required>
  </div>
  
  <button type="submit" name="signup" class="btn btn-primary">Sign up</button>
  </div>
  </div>
</form>

<?php

if(isset($_POST["signup"]))
{
 
include 'signup.php';
 
$Fname = $_POST["Fname1"];
$Lname = $_POST["Lname1"];
$Email = $_POST["Email1"];
$Bday = $_POST["Bday"];
$Username = $_POST["Username1"];
$Password = $_POST["Password1"];




}


?>


</div>
</div>
</body>