<?php
include './header.php';
include './classes/loginprocess.php';
?>

<body>

<?php
$db = new LogIn;
?>

<div class="container">
<div class="row">

<div class="col-md-6 offset-md-3">
<div class="card" style="border: 0px; margin-top: 25%">

<form class="form" method="post" action="">
<label for="username">Username:</label>
<input type="text" name="username" class="form-control" required>
<br>
<label for="password">Password:</label>
<input type="password" name="password" class="form-control" required>
<br>
<input type="submit" value="Log In" name="submit" class="form-control btn btn-primary">

<a href="./registration.php">sign up</a>

</form>

<?php
      if(isset($_POST['submit'])){
           $db->LoginProcess($_POST["username"],$_POST["password"]);


      }


    ?>
</div>
</div>

</div>

</div>

</body>