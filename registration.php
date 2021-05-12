<?php
include './header.php';

include 'signup.php';
 
/*$Fname = $_POST["Fname1"];
$Lname = $_POST["Lname1"];
$Email = $_POST["Email1"];
$Bday = $_POST["Bday"];
$Username = $_POST["Username1"];
$Password = $_POST["Password1"];*/


?>
<body>

<?php
$db = new signup;
?>


<div class="container">
<div class="col-md-4 offset-md-4 mt-5">


  
<form method="post" action="">

<div class="myDiv">

<div class="mb-3">
    <label for="Fname1" class="form-label">First Name </label>
    <input type="text" class="form-control" name="Fname1" required>
  </div>

 
  <div class="mb-3">
    <label for="Lname1" class="form-label">Last Name </label>
    <input type="text" class="form-control" name="Lname1" required>
  </div>


  <div class="mb-3">
    <label for="Email1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="Email1" required>
   </div>

  <div class="mb-3">
    <label for="Bday" class="form-label">Birthday </label>
    <input type="date" class="form-control" name="Bday" required>
  </div>

  <div class="mb-3">
    <label for="Username1" class="form-label">User Name</label>
    <input type="text" class="form-control" name="Username1" required>
  </div>

  <div class="mb-3">
    <label for="Password1" class="form-label">Password</label>
    <input type="password" class="form-control" name="Password1" required>
  </div>
  
  <button type="submit" name="signup" class="btn btn-primary">Sign up</button>


</form>
  </div>
<?php

if(isset($_POST["signup"]))
{
    $db->Registration($_POST["Fname1"],$_POST["Lname1"],$_POST["Email1"],$_POST["Bday"],$_POST["Username1"],$_POST["Password1"]);
  }

?>


</div>
</div>
</body>