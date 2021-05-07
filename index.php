<?php
include './header.php';
include './classes/loginprocess.php';
?>

<body>

<?php
$db = new LogIn;

$db->LoginProcess();
?>

<div class="container">
<div class="row">

<div class="col-md-6 offset-md-3">
<div class="card" style="border: 0px; margin-top: 25%">
<form class="form" method="post">
<label for="username">Username:</label>
<input type="text" name="username" class="form-control" required>
<br>
<label for="password">Password:</label>
<input type="password" name="password" class="form-control" required>
<br>
<input type="submit" value="Log In" class="form-control btn btn-primary">
</form>
</div>
</div>

</div>

</div>

</body>