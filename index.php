<?php
include './header.php';
include './classes/loginprocess.php';
if(!empty($_SESSION['username'])){
     header('Location: ./dashboard/dashboard.php');
}
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
<input type="submit" value="Log In" name="submit" class="form-control btn">

<a href="./registration.php">Sign up</a>

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